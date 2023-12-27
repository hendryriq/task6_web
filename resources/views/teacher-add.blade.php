@extends('layouts.mainlayout')

@section('title', 'Teacher | add new')

@section('content')
{{-- {{$class}} --}}
   <form action="teacher" method="post" enctype="multipart/form-data">
      <h3>Add Teacher</h3>
      @csrf
      <div class="mb-3">
         <label for="name">Name</label>
         <input type="text" class="form-control" name="name" id="name">
      </div>

      {{-- <div class="mb-3">
         <label for="class">Class</label>
         <select name="class_id" id="class" class="form-control" >
            <option value="">Select One</option>
            @foreach ($class as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
         </select>
      </div> --}}
     
      <div class="mb-3">
         <button class="btn btn-success">Save</button>
      </div>
   </form>
</div>

@endsection