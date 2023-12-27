@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')

@if(Auth::user()->role_id != 1)
            @else
<div class="my-5">
   <a href="/extracurricular-add" class="btn btn-primary">Add Data</a>
</div>
@endif
<table class="table table-bordered ">
   <thead>
      <tr>
         <th>#</th>
         <th>Name</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($ekskulList as $data)
      <tr>
         <td>{{$loop->iteration}}</td>
         <td>{{$data->name}}</td>
         <td class=""><a class="btn btn-primary" href="extracurricular-detail/{{$data->id}}">Detail</a>
         <a class="btn btn-danger" href="extracurricular-delete/{{$data->id}}">Delete</a></td>
      </tr>
      @endforeach

   </tbody>
</table>

@endsection
