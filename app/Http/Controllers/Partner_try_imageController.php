<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Try_image;
use App\Models\game_user;

class Partner_try_imageController extends Controller
{
    public function partner_create ()
    {
        $user = Cookie::get('partner_game_user');
        $wanna_try = Cookie::get('wanna_try');
        $question1 = Cookie::get('Q1');
        return response()->view('try_image.partner_create',['user' => $user, 'question1' => $question1, 'wanna_try' => $wanna_try]);
    }
    
    public function partner_store (Request $request)
    {
        $p_image1 = $request->input('image');
        Cookie::queue('p_image1', $p_image1);
        return redirect()->route('partner_image.sub_create');
    }
    
    public function partner_sub_create ()
    {
        $user = Cookie::get('partner_game_user');
        $wanna_try = Cookie::get('wanna_try');
        $question2 = Cookie::get('Q2');
        return response()->view('try_image.partner_create_g2',['user' => $user, 'question2' => $question2, 'wanna_try' => $wanna_try]);
    }
    
    public function  partner_sub_store (Request $request)
    {
        $p_image2 = $request->input('image');
        Cookie::queue('p_image2', $p_image2);
        return redirect()->route('partner_image.subg3_create');
    }
    
    public function partner_subg3_create ()
    {
        $user = Cookie::get('partner_game_user');
        $wanna_try = Cookie::get('wanna_try');
        $question3 = Cookie::get('Q3');
        return response()->view('try_image.partner_create_g3',['user' => $user, 'question3' => $question3, 'wanna_try' => $wanna_try]);
    }
    
    public function  partner_subg3_store (Request $request)
    {
        $p_image3 = $request->input('image');
        Cookie::queue('p_image3', $p_image3);
         return redirect()->route('content.create');
    }
   
    
    
    
}
