<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Extracurricular;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function  index()
    {
        $jumlah_student = Student::all()->count();
        $jumlah_teacher = Teacher::all()->count();
        $jumlah_class = ClassRoom::all()->count();
        $jumlah_extracurricular = Extracurricular::all()->count();
        return view('home', compact("jumlah_student", "jumlah_teacher", "jumlah_class", "jumlah_extracurricular"));
    }
}
