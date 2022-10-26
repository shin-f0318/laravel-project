<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function Homework() { 
        return view('Homework');
    }   
    public function confirm(Request $request){
        return view('Homework-confirm');
    }
}    