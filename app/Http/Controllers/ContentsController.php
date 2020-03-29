<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //

    public function home(){
        return view('contents/home');   
    }

    public function getDashboard()
    {

        return view('students.backend.dashboard');
    }
    public function getInputData()
    {

        return view('students.frontend.inputdata');
    }
}
