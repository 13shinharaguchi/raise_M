<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Try_image;

class Partner_try_imageController extends Controller
{
    public function partner_create ()
    {
        //フォルダー名も最初につけてあげる必要がある
        return response()->view('try_image.partner_create');
    }
    
    public function partner_store (Request $request)
    {
        return redirect()->route('partner_image.sub_create');
    }
    
    public function partner_sub_create ()
    {
        //フォルダー名も最初につけてあげる必要がある
        return response()->view('try_image.partner_create_g2');
    }
    
    public function  partner_sub_store (Request $request)
    {
        return redirect()->route('partner_image.subg3_create');
    }
    
    public function partner_subg3_create ()
    {
        //フォルダー名も最初につけてあげる必要がある
        return response()->view('try_image.partner_create_g3');
    }
    
    public function  partner_subg3_store (Request $request)
    {
        // return redirect()->route('partner_image.subg3_create');
         return response()->view('welcome');
    }
   
    
    
    
}
