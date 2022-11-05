<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class contactController extends Controller
{
    public function contact(){ 
        return view('develop.contact');
    }
    public function confirmation(Request $request){
        return view('develop.confirmation');
    }    
    public function store(Request $request) {
        $contact = new Content();
        $contact->name = $request->input('name');
        $contact->hurigana = $request->input('hurigana');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('tel');
        $contact->message = $request->input('message');
        $contact->contact = $request->input('contact');
        $contact->save();

        return view('develop.confirmation');
    }
}