@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')
<h3>Teacher List</h3>
@if(Auth::user()->role_id != 1)
            @else
<div class="my-5">
   <a href="" class="btn btn-primary">Add Data</a>
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
         <td><a class="btn btn-primary" href="student/{{$data->id}}">Detail</a></td>
         @endif

         
      </tr>
      @endforeach

   </tbody>
</table>

@endsection
