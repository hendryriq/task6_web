@extends('layouts.mainlayout')

@section('title', 'Class')

@section('content')
<h3>Class List</h3>
@if(Auth::user()->role_id != 1)
            @else
<div class="my-5">
   <a href="/class-add" class="btn btn-primary">Add Data</a>
</div>
@endif

<table class="table">
   <thead>
      <tr>
         <th>No.</th>
         <th>Name</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($classList as $data)
      <tr>
         <td>{{$loop->iteration}}</td>
         <td>{{$data->name}}</td>    
         <td><a class="btn btn-primary" href="class-detail/{{$data->id}}">Detail</a></td>
      @endforeach
   </tbody>
</table>

@endsection
