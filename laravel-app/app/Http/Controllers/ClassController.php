<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;

class ClassController extends Controller
{
    public function showClasses(){
        $classes = Classes::all();
        return view('classes', ['classes' => $classes]);
    }

    public function build(Request $request){
        Classes::create([
            'class' => $request->class,
            'build' => $request->build,
            'role' => $request->role,
        ]);

        return redirect('/');
    }

    public function form(){
        return view('form');
    }
}
