@extends('teacher.layouts.teacher')

@section('content')
	<div>
		<div class="col-sm-11">
			<h2>Show Detail Teacher</h2>
		<div>
	</div>

	<div>
		<table class=" table table-bordered">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
			</tr>
			<tr>
				<td>{{$teacher->first_name}}</td>
				<td>{{$teacher->last_name}}</td>
				<td>{{$teacher->address}}</td>
			</tr>
			</tr>
		</table>
		<div>
			<a class="btn btn-primary" href="{{url('teacher')}}">Back To List Teacher</a>
		</div>
	</div>
@endsection