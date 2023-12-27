@extends('layouts.mainlayout')

@section('title', 'Extracurricular | add new')

@section('content')


<div class="mt-5 col-8 m-auto">
   <form action="extracurricular" method="post" enctype="multipart/form-data">
      <h3>Add Extracurricular</h3>
      @csrf
      <div class="mb-3">
         <label for="name">Name</label>
         <input type="text" class="form-control" name="name" id="name">
      </div>
      <div class="mb-3">
         <button class="btn btn-success">Save</button>
      </div>
   </form>
</div>

@endsection