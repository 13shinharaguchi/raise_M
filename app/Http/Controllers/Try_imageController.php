<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Try_image;

class Try_imageController extends Controller
{
        public function create ()
        {
            //view('try_image.create')はルートではなく、'try_image.create'というファイルを探してもってきている
        $granularity_id = 1;
         return response()->view('try_image.create',['granularity' => $granularity_id]);
                
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
         return response()->view('try_image.create_g2',['granularity' => $granularity_id]);
                
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
         return response()->view('try_image.create_g3',['granularity' => $granularity_id]);
                
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
