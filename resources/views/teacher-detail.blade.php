@extends('layouts.mainlayout')

@section('title', 'Teacher Detail')

@section('content')
<h1>Halaman Detail Teacher</h1>
{{-- {{$student}} --}}



<div class="mt-5">
<table class="table table-bordered">
   <tr>
      <th>Nama</th>
      <th>Class</th>
   </tr>
   <tr>
      <td>{{$teacher->name}}</td>
      {{-- <td>{{$teacher->class->name}}</td> --}}
   </tr>
</table>
</div>


<style>
   th{
      width: 20%;
   }
</style>

{{-- <ol>
   <li>{{$student->name}}</li>
   <li>{{$student->gender}}</li>
   <li>{{$student->nis}}</li>
   <li>{{$student->class_id}}</li>
</ol> --}}
@endsection
