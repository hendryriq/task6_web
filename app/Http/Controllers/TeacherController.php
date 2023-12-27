<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function index(){
    $teacher = Teacher::all();
    return view('teacher', ['teacherList' => $teacher]);
    }

    public function create(){
        $class = ClassRoom::all();
        return view('/teacher-add', ['class' => $class]);
    }

    public function show($id){
        $teacher = Teacher::findOrFail($id);
        return view('teacher-detail', ['teacher' => $teacher]);
    }

    public function store(Request $request){
       
        $teacher=Teacher::create($request->all());
        if($teacher){
            Session::flash('status', 'success');
            Session::flash('message', 'add new teacher success!');
        }

        return redirect('/teacher');
    }

    public function update(Request $request, $id){
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect('/teacher');
    }

    public function delete($id){
        $teacher = Teacher::findOrFail($id);
        return view('teacher-delete', ['teacher'=> $teacher]);
    }

    public function deletedTeacher(){
        $teacher = Teacher::onlyTrashed()->get();
        return view('teacher-deleted-list', ['teacher' => $teacher]);
    }

    public function destroy($id){
        $deletedTeacher = Teacher::findOrFail($id);
        $deletedTeacher->delete();

        if($deletedTeacher){
            Session::flash('status', 'success');
            Session::flash('message', 'Delete Teacher success!');
        }

        return redirect('/teacher');
    }

    
}
