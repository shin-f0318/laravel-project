<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class contactController extends Controller
{
    public function contact(){ 
        return view('contact');
    }
    public function confirmation(Request $request){
        return view('confirmation');
    }    
    public function store(Request $request) {
        $contact = new Post();
        $contact->'name' = $request->input('name');
        $contact->'hurigana' = $request->input('hurigana');
        $contact->'email' = $request->input('email');
        $contact->'tel' = $request->input('tel');
        $contact->'message' = $request->input('message');
        $contact->'contact' = $request->input('contact');
        $contact->save();

        return redirect('confirmation');
    }
}