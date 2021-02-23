@extends('teacher.layouts.teacher')

@section('content')
	<div class="row">
		<div class="col-sm-11">
			<h2>Add New Teacher</h2>
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
	<form action="{{ route('teacher.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label>First Name:</label>
			<input type="text" class="form-control" name="firstName"
			placeholder="Nhập first name">
		</div>
		<div class="form-group">
			<label>Last Name:</label>
			<input type="text" class="form-control" name="lastName"
			placeholder="Nhập last name">
		</div>
		<div class="form-group">
			<label>Address:</label>
			<textarea class="form-control" rows="5" style="width: 70%;" name="address"
				 placeholder="Nhập địa chỉ"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Submit</button>
			<a class="btn btn-primary" href="{{ url('teacher') }}">Back To List Teachers</a>
		</div>
	</form>
@endsection