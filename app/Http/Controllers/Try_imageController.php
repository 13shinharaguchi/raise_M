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
        $granularity_id = 1;
        $user = game_user::orderBy('created_at')->first();
        $question1 = Cookie::get('Q1');
         return response()->view('try_image.create',['granularity' => $granularity_id,
                                                     'user' => $user, 
                                                     'wanna_try' => $wanna_try, 
                                                     'question1' => $question1]);
                
        }
        
        public function store(Request $request)
        {
        $data = $request->all();
        $result = Try_image::create($data);
        
         return redirect()->route('image.sub_create');
         
        }
        
        public function sub_create ()
        {
        $granularity_id = 2;
        $user = game_user::orderBy('created_at')->first();
        $question2 = Cookie::get('Q2');
         return response()->view('try_image.create_g2',['granularity' => $granularity_id, 'user' => $user, 'question2' => $question2]);
                
        }
        
        public function sub_store(Request $request)
        {
        $data = $request->all();
        $result = Try_image::create($data);
           return redirect()->route('image.subg3_create');
          
        }
        
        public function subg3_create ()
        {
        $granularity_id = 3;
        $user = game_user::orderBy('created_at')->first();
        $question3 = Cookie::get('Q3');
        return response()->view('try_image.create_g3',['granularity' => $granularity_id, 'user' => $user, 'question3' => $question3]);
                
        }
        
        public function subg3_store(Request $request)
        {
        $data = $request->all();
        $result = Try_image::create($data);
         return redirect()->route('partner_register');
        }
    
}
