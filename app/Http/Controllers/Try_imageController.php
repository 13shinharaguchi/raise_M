<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Try_image;
use App\Models\game_user;

class Try_imageController extends Controller
{
        public function create ()
        {
         $wanna_try = Cookie::get('wanna_try');
        $granularity_id = 1;
        //名前の表示(ふたりしか登録しないから順番をどうするか)
        $user = game_user::orderBy('created_at')->first();
         return response()->view('try_image.create',['granularity' => $granularity_id ,'user' => $user, 'wanna_try' => $wanna_try]);
                
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
         return response()->view('try_image.create_g2',['granularity' => $granularity_id, 'user' => $user]);
                
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
         return response()->view('try_image.create_g3',['granularity' => $granularity_id, 'user' => $user]);
                
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
