<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    //
    public function index(Request $request){
        $student = student::all();
        return view('crud.index')->with("students",$student);
    }
    public function insert(Request $request)
    {
        $request->validate([
            'name'=>'required | min:3',
            'email'=>'required | email',
            'phone'=>'required'
        ]);
        $student = new student;
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->phone = $request->get('phone');
        $student->save();
        return redirect()->route('index');
    }
    public function fetch(Request $request,$id){
        $student = student::find($id);
        return view('crud.update')->with("std",$student);
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required | min:3',
            'email'=>'required | email',
            'phone'=>'required'
        ]);
        $student = student::find($id);
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->phone = $request->get('phone');
        $student->save();
        return redirect()->route('index');
    }
    public function delete(Request $request,$id){
        $student = student::find($id);
        $student->delete();
        return redirect()->route('index');
    }
}
