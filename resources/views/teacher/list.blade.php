@extends('teacher.layouts.teacher')

@section('content')
    <div class="row">
        <div class="col-sm-11">
                <h2>Teacher List</h2>
        </div>
        <div class="col-sm-1">
            <a class="btn btn-success" href="{{ route('teacher.create')}}">Add</a>
        </div>
    </div>
    
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $teacher->first_name }}</td>
            <td>{{ $teacher->last_name }}</td>
            <td>{{ $teacher->address }}</td>
            <td>
                <form action="{{ route('teacher.destroy', $teacher->id)}}" method="post">
                    <a class="btn btn-info" href="{{ route('teacher.show', $teacher->id)}} ">View</a>
                    <a class="btn btn-success" href="{{ route('teacher.edit', $teacher->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection