<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Try_imageController extends Controller
{
        public function create ()
        {
            //view('try_image.create')はルートではなく、'try_image.create'というファイルを探してもってきている
         return response()->view('try_image.create');
                
        }
        
        public function store(Request $request)
        {

         return redirect()->route('image.sub_create');
         
        }
        
        public function sub_create ()
        {
            //view('try_image.create')はルートではなく、'try_image.create'というファイルを探してもってきている
         return response()->view('try_image.create_g2');
                
        }
        
        public function sub_store(Request $request)
        {
            
        //   return response()->view('try_image.create_g3');
           return redirect()->route('image.subg3_create');
          
        }
        
        public function subg3_create ()
        {
            //view('try_image.create')はルートではなく、'try_image.create'というファイルを探してもってきている
         return response()->view('try_image.create_g3');
                
        }
        
        public function subg3_store(Request $request)
        {
            
          return response()->view('welcome');
          
        }
    
}
