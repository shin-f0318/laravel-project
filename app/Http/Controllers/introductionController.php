<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class introductionController extends Controller
{
    public function introduction(){ return view('introduction');
    }
}