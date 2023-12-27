@extends('layouts.mainlayout')

@section('title', 'Teacher Delete ')

@section('content')

<div class="mt-5">
   <h3>Apa anda yakin ingin menghapus data guru dengan nama {{$teacher->name}}</h3>
   <form style="display: inline-block" action="/teacher-delete/{{$teacher->id}}" method="post">
      @csrf
      @method('delete')
      <button class="btn btn-danger" href="/teacher">Delete</button>
   </form>
  
   <a class="btn btn-primary" href="/teacher">Cancel</a>
</div>

@endsection