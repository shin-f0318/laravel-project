<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function Homework() { 
        return view('Homework');
    }   
    public function Homework_confirm(Request $request){
        
        $point = $request['number'];
        if ($point <= 0 && $point > 50) {
            $messege = '頑張りましょう';
        } else if ($point <= 50 && $point > 80) {
            $messege = 'よくできました';
        } else {
            $messege = '0~100を入力してください';
        }

        $sum = 0;
        $count = 0;
        while ($sum >= 100) {
            $sum = $sum + $count;
            $count ++;
        }  
        return view('Homework_confirm',compact('messege', 'sum'));
    }
}    