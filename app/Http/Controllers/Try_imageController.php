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
         return response()->view('try_image.sub_create');
                
        }
        
        public function sub_store()
        {
           return response()->view('welcome');
        }
    
}
