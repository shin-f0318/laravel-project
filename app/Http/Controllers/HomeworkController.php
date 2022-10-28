<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function Homework() { 
        return view('Homework');
    }   
    public function test(Request $request){
        $test = 0;
        if ($test <= 0 && $test > 50 ) {
            echo '頑張りましょう';
        } else if ($test <= 50 && $test > 80) {
            echo 'よくできました';
        } else {
            echo '0~100を入力してください';
        }
        return view('Homework-confirm', compact('$test'));
    }
    public function sum(Request $request) {
        $sum = 0;
        while ($sum <= 1 && $sum >= 100) {
            $sum += $sum;
            echo $sum;
        }
        return view('Homework-confirm', compact('$sum'));
    }
}    