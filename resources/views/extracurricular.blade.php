@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')

<div class="my-5">
   <a href="" class="btn btn-primary">Add Data</a>
</div>
<table class="table table-bordered">
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
         <td><a class="btn btn-primary" href="extracurricular-detail/{{$data->id}}">Detail</a></td>
      </tr>
      @endforeach

   </tbody>
</table>

@endsection
