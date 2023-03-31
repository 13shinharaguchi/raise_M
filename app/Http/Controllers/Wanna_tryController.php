<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Question_Box;

class Wanna_tryController extends Controller
{
    // ここに大本のやってみたいことをセッションなり、なんなりに保存する処理を記述する
    public function create (){
         return response()->view('wanna_try.create');
    }
    
    public function store(Request $request){
        $wanna_try = $request->input('wanna_try');
        Cookie::queue('wanna_try', $wanna_try);
        
        // $questions = [];
        // $count = 3; // 3回繰り返す

        // for ($i = 0; $i < $count; $i++) {
        //     $questions[$i] = Question_Box::where('kind_number', $i)->inRandomOrder()->first();
        //     dd($questions[$i]);
        //     $Q[$i] = $question[$i] -> question;
        //     dd($Q[$i]);
        //     Cookie::queue('$Q{{$i}}', $Q[$i]);
        //     }
        
        // $question1 = Question_Box::where('kind_number', 1)->inRandomOrder()->first();
        // $Q1 = $question1 -> question;
        // Cookie::queue('$Q1', $Q1);
        
        // $question2 = Question_Box::where('kind_number', 2)->inRandomOrder()->first();
        // $Q2 = $question2 -> question;
        // Cookie::queue('$Q2', $Q2);
        
        // $question3 = Question_Box::where('kind_number', 3)->inRandomOrder()->first();
        // $Q3 = $question3 -> question;
        // // dd($Q1,$Q2,$Q3);
        // Cookie::queue('$Q3', $Q3);
        
        $questions = [];
        $count = 4; // 3回繰り返す

        for ($i = 1; $i < $count; $i++) {
            $questions[$i] = Question_Box::where('kind_number', $i)->inRandomOrder()->first();
            $Q[$i] = $questions[$i]->question;
            Cookie::queue("Q$i", $Q[$i]);
            }
            
        return redirect()->route('image.create');
    }
    
}
