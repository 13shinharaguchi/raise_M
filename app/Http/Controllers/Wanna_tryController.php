<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wanna_tryController extends Controller
{
    // ここに大本のやってみたいことをセッションなり、なんなりに保存する処理を記述する
    public function create (){
         return response()->view('wanna_try.create');
    }
    
    public function store(Request $request){
            //下記部分をセッションなんなりに保存した場合は、responseではなく、redirectに変更したほうがよき
        //  return response()->view('try_image.create');
        return redirect()->route('image.create');
    }
    
}
