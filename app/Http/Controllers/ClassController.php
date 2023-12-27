<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    public function index(){
        // $class = ClassRoom::all();
        // dd($student);

        $class = ClassRoom::get();

        return view('classroom',['classList' => $class]);
    }

    public function show($id){
        $class = ClassRoom::all()
        ->findOrFail($id);
        return view('class-detail', ['class' => $class]);
    }

    public function create(){
        $teacher = Teacher::all();
        return view('/class-add', ['teacher' => $teacher]);
    }

    public function store(Request $request){
       
        $classroom=ClassRoom::create($request->all());
        if($classroom){
            Session::flash('status', 'success');
            Session::flash('message', 'add new class success!');
        }

        return redirect('/class');
    }
}
