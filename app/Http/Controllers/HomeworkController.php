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
        if ($point <= 0 && $point > 50 ) {
            echo '頑張りましょう';
        } else if ($point <= 50 && $point > 80) {
            echo 'よくできました';
        } else {
            echo '0~100を入力してください';
        }

        $sum = $request['number'];
        while ($sum <= 1 && $sum >= 100) {
            $sum += $sum;
            echo $sum;
        }
        
        return view('Homework_confirm',compact('point', 'sum'));

    }
    // public function sum(Request $request) {
    //     $sum = 0;
    //     while ($sum <= 1 && $sum >= 100) {
    //         $sum += $sum;
    //         echo $sum;
    //     }
    //     return view('Homework_confirm', compact('$sum'));
    // }
}    