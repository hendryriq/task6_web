@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')
<h3>Teacher List</h3>
@if(Auth::user()->role_id != 1)
            @else
<div class="my-5">
   <a href="/teacher-add" class="btn btn-primary">Add Data</a>
   <a class="btn btn-info" href="teacher-deleted">Show Deleted Data</a>
</div>
@endif

<table class="table">
   <thead>
      <tr>
         <th>#</th>
         <th>Name</th>
         @if(Auth::user()->role_id != 1)
            @else
         <th>Action</th>
         @endif
      </tr>
   </thead>
   <tbody>
      @foreach ($teacherList as $data)
      <tr>
         <td>{{$loop->iteration}}</td>
         <td>{{$data->name}}</td>
         @if(Auth::user()->role_id != 1)
            @else
         <td><a class="btn btn-primary" href="teacher/{{$data->id}}">Detail</a>
            <a class="btn btn-danger" href="teacher-delete/{{$data->id}}">Delete</a></td>
         @endif
      </tr>
      @endforeach

   </tbody>
</table>

@endsection
