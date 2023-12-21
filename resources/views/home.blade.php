@extends('layouts.mainlayout')
@section('title', 'Home')


@section('content')
<h1>Dashboard</h1>
{{-- <h2>Selamat datang, {{Auth::user()->name}}. Anda adalah</h2>
{{Auth::user()->name}} --}}



<div class="d-flex flex-row">
   <div class="card" style="width: 18rem; margin-right: 10px;">
       <div class="card-body">
           <h5 class="card-title">{{$jumlah_student}}</h5>
           <p class="card-text">Jumlah Siswa</p>
       </div>
   </div>

   <div class="card" style="width: 18rem; margin-right: 10px;">
       <div class="card-body">
           <h5 class="card-title">{{$jumlah_teacher}}</h5>
           <p class="card-text">Jumlah Guru</p>
       </div>
   </div>

   <div class="card" style="width: 18rem; margin-right: 10px;">
       <div class="card-body">
           <h5 class="card-title">{{$jumlah_class}}</h5>
           <p class="card-text">Jumlah Kelas</p>
       </div>
   </div>

   <div class="card" style="width: 18rem;">
       <div class="card-body">
           <h5 class="card-title">{{$jumlah_extracurricular}}</h5>
           <p class="card-text">Extracurricular</p>
       </div>
   </div>
</div>


@endsection
