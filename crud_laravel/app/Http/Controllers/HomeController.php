<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function welcome(){
        return view('welcome');
    }

    public function upload(Request $request){

        $student = new student;

        $student -> name = $request -> name;
        $student -> email = $request -> email;

        $image = $request -> image;

        if($image){

            $imagename = time().'.'.$image -> getClientOriginalExtension();
            $request -> image -> move('student',$imagename);
            $student ->image = $imagename;
        }

        $student -> save();

        return redirect() -> back();
    }
    public function view(){

        $data = Student::all();
        return view('display',compact('data'));
    }
    public function delete($id){

        $data = Student::find($id);

        $data -> delete();
        return redirect() -> back();
    }

    public function search(Request $request){

        $search = $request -> search;

        $data = Student::where('name','Like','%'.$search.'%') 
        -> orwhere('email','Like','%'.$search.'%') -> get();

        return view('display',compact('data'));

    }

    public function update($id){

        $student = Student::find($id);
        return view('update_student',compact('student'));
    }

    public function update_data(Request $request,$id){

        $student = Student::find($id);

        $student -> name = $request -> name;
        $student -> email = $request -> email;

        $image = $request -> image;

        if($image){

            $imagename = time().'.'.$image -> getClientOriginalExtension();
            $request -> image -> move('student',$imagename);
            $student ->image = $imagename;
        }


        $student -> save();
        return redirect() -> back();
    }
}
