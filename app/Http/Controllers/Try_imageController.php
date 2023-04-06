<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Try_image;
use App\Models\game_user;
use App\Models\Question_Box;

class Try_imageController extends Controller
{
        public function create ()
        {
            $wanna_try = Cookie::get('wanna_try');
            $user = Cookie::get('game_user');
            $question1 = Cookie::get('Q1');
            return response()->view('try_image.create',[
                                                     'user' => $user, 
                                                     'wanna_try' => $wanna_try, 
                                                     'question1' => $question1]);
                
        }
        
        public function store(Request $request)
        {
            $image1 = $request->input('image');
            Cookie::queue('image1', $image1);
            return redirect()->route('image.sub_create');
         
        }
        
        public function sub_create ()
        {
            $wanna_try = Cookie::get('wanna_try');
            $user = Cookie::get('game_user');
            $question2 = Cookie::get('Q2');
            return response()->view('try_image.create_g2',['user' => $user, 
                                                           'wanna_try' => $wanna_try,
                                                           'question2' => $question2]);
                
        }
        
        public function sub_store(Request $request)
        {
            $image2 = $request->input('image');
            Cookie::queue('image2', $image2);
            return redirect()->route('image.subg3_create');
          
        }
        
        public function subg3_create ()
        {
            $wanna_try = Cookie::get('wanna_try');
            $user = Cookie::get('game_user');
            $question3 = Cookie::get('Q3');
            return response()->view('try_image.create_g3',['user' => $user, 
                                                           'wanna_try' => $wanna_try,
                                                           'question3' => $question3]);
                
        }
        
        public function subg3_store(Request $request)
        {
            $image3 = $request->input('image');
            Cookie::queue('image3', $image3);
            return redirect()->route('user_change');
            // return redirect()->route('partner_register');
        }
    
}
