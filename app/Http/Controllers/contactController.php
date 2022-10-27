<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact(){ 
        return view('contact');
    }
    public function confirmation(Request $request){
        return view('confirmation');
    }    
    
    /* public function contact() { 
        $contact_submit function ()= {
        }
        , compact('contact_submit'));
    } */
}