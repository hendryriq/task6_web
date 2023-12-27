@extends('layouts.mainlayout')

@section('title', 'Teacher deleted')

@section('content')
<h1>Ini adalah Halaman Teacher yang sudah di delete</h1>

<table class="table">
   <thead>
      <tr>
         <th>#</th>
         <th>Name</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($teacher as $data)
      <tr>
         <td>{{$loop->iteration}}</td>
         <td>{{$data->name}}</td>
         <td><a class="btn btn-primary" href="/teacher/{{$data->id}}/restore">Restore</a>
      </tr>
      @endforeach
   </tbody>
</table>

@endsection