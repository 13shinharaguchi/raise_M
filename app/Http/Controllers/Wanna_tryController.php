<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Wanna_tryController extends Controller
{
    // ここに大本のやってみたいことをセッションなり、なんなりに保存する処理を記述する
    public function create (){
         return response()->view('wanna_try.create');
    }
    
    public function store(Request $request){
        $wanna_try = $request->input('wanna_try');
        Cookie::queue('wanna_try', $wanna_try);
        
        return redirect()->route('image.create');
    }
    
}
