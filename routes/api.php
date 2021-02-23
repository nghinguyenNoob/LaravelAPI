<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewTeacherController;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('teacher', TeacherController::class); Cach tong quan nhat

//Api get List Teachers from DB
// Route::get('teacher', function(){
// 	return response(Teacher::all(), 200);
// });

Route::get('teachers', 'App\Http\Controllers\TeacherController@index')->name('teacher.all');

// API create Teacher
Route::post('teachers', 'App\Http\Controllers\TeacherController@store')->name('teacher.store');

// API get Teacher by teacher id
// Route::get('teacher/{teacher}', function($teacherId){
// 	return response(Teacher::find($teacherId), 200);
// });
Route::get('teachers/{teacher}', 'App\Http\Controllers\TeacherController@show')->name('teacher.show');

// API update Teacher
Route::put('teachers', 'App\Http\Controllers\TeacherController@update')->name('teacher.update');

// API delete Teacher by id
Route::delete('teachers/{teacher}','App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');