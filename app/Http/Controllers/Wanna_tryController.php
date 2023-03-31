<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Question_Box;

class Wanna_tryController extends Controller
{
    public function create (){
         return response()->view('wanna_try.create');
    }
    
    public function store(Request $request){
        $wanna_try = $request->input('wanna_try');
        Cookie::queue('wanna_try', $wanna_try);
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
