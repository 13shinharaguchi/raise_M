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
        // 下記削除
        // $question1 = Question_Box::where('kind_number', 1)->inRandomOrder()->first();
        // $Q1 = $question1 -> question;
        // // dd($Q1);
        // Cookie::queue('$Q1', $Q1);
        $question1 = Cookie::get('Q1');
         return response()->view('try_image.create',['granularity' => $granularity_id,
                                                     'user' => $user, 
                                                     'wanna_try' => $wanna_try, 
                                                     'question1' => $question1]);
                
        }
        
        public function store(Request $request)
        {
        $data = $request->all();
        // dd($data);
        $result = Try_image::create($data);
        
         return redirect()->route('image.sub_create');
         
        }
        
        public function sub_create ()
        {
        $granularity_id = 2;
        $user = game_user::orderBy('created_at')->first();
        // $question2 = Question_Box::where('kind_number', 2)->inRandomOrder()->first();
        // $Q2 = $question2 -> question;
        // Cookie::queue('$Q2', $Q2);
        $question2 = Cookie::get('Q2');
         return response()->view('try_image.create_g2',['granularity' => $granularity_id, 'user' => $user, 'question2' => $question2]);
                
        }
        
        public function sub_store(Request $request)
        {
        $data = $request->all();
        $result = Try_image::create($data);
        //   return response()->view('try_image.create_g3');
           return redirect()->route('image.subg3_create');
          
        }
        
        public function subg3_create ()
        {
            //view('try_image.create')はルートではなく、'try_image.create'というファイルを探してもってきている
        $granularity_id = 3;
        $user = game_user::orderBy('created_at')->first();
        // $question3 = Question_Box::where('kind_number', 3)->inRandomOrder()->first();
        // $Q3 = $question3 -> question;
        // Cookie::queue('$Q3', $Q3);
        $question3 = Cookie::get('Q3');
        return response()->view('try_image.create_g3',['granularity' => $granularity_id, 'user' => $user, 'question3' => $question3]);
                
        }
        
        public function subg3_store(Request $request)
        {
        $data = $request->all();
        $result = Try_image::create($data);
        //  ここのrouteでパートナーの名前を登録するページに遷移
         return redirect()->route('partner_register');
          // return redirect()->route('partner_image.create');
        }
    
}
