@extends('teacher.layouts.teacher')

@section('content')
	<div class="row">
		<div class="col-sm-11">
			<h2>Edit New Teacher</h2>
		</div>
	</div>
	@if ($errors->any())
		<div>
			<strong>Lỗi!</strong> Vui lòng nhập thông tin vào các input bắt buộc.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label>First Name:</label>
			<input type="text" class="form-control" name="firstName"
			placeholder="Nhập first name" value="{{$teacher->first_name}}">
		</div>
		<div class="form-group">
			<label>Last Name:</label>
			<input type="text" class="form-control" name="lastName"
			placeholder="Nhập last name" value="{{$teacher->last_name}}">
		</div>
		<div class="form-group">
			<label>Address:</label>
			<textarea class="form-control" rows="5" style="width: 70%;" name="address"
				 placeholder="Nhập địa chỉ">{{$teacher->address}}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Submit</button>
			<a class="btn btn-primary" href="{{ url('teacher') }}">Back To List Teachers</a>
		</div>
	</form>
@endsection