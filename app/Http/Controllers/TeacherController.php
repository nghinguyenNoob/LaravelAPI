<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Teacher;

class TeacherController extends Controller
{
   public function index()
   {
		// $teachers = Teacher::all();
		// return view('teacher.list', compact('teachers'));
      return  Teacher::all();
   }

  //  public function create(){
		// return view('teacher.create');
  //  }

   public function store(Request $request)
   {
      // print($request)
		//Validate
		$request->validate([
			'firstName' =>['required', 'max: 10'],
			'lastName' =>['required', 'max: 20'],
			'address' =>['required', 'max: 100']
		]);

		$teacher = new Teacher([
			'first_name' => $request->input('firstName'),
			'last_name' => $request->input('lastName'),
			'address' => $request->input('address'),
			'created_at'=>now(),
		]);
      
		$result = $teacher->save();
		//return Teacher::all();
      return response()->json([
         'result' => $result
      ]);
   }

   public function show(Teacher $teacher)
   {
      //return view('teacher.view', compact('teacher'));
      return $teacher;
   }

  //  public function edit(Teacher $teacher)
  //  {
		// return view('teacher.edit', compact('teacher'));
  //  }

   public function update(Request $request)
   {
		$validator = Validator::make($request->all(),[
         'firstName'=>['required', 'max: 10'],
			'lastName'=>['required', 'max: 20'],
			'address'=>['required','max: 100']
		]);

		$teacher = Teacher::find($request->get('id'));
		$teacher->first_name = $request->get('firstName');
		$teacher->last_name = $request->get('lastName');
		$teacher->address = $request->get('address');

		if($validator->fails()){
			// Handel check error and send response
			// return view keep data input
			return view('teacher.edit', compact('teacher'))->withErrors($validator);
		}

		$result = $teacher->update();

		return response()->json(['message'=>'Update Teacher message', 'result'=> $result]);
   }

   public function destroy(Teacher $teacher)
   {

      $result = $teacher->delete();
      return response()->json(['message'=>'Delete teacher message','result'=> $result]);
   }
}
