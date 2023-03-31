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
        // $granularity_id = 1;
        // $user = game_user::orderBy('created_at', 'desc')->first();
        $user = Cookie::get('partner_game_user');
        $question1 = Cookie::get('Q1');
        return response()->view('try_image.partner_create',['user' => $user, 'question1' => $question1]);
    }
    
    public function partner_store (Request $request)
    {
        // $data = $request->all();
        // $result = Try_image::create($data);
        $p_image1 = $request->input('image');
        Cookie::queue('p_image1', $p_image1);
        return redirect()->route('partner_image.sub_create');
    }
    
    public function partner_sub_create ()
    {
        // $granularity_id = 2;
        // $user = game_user::orderBy('created_at', 'desc')->first();
        $user = Cookie::get('partner_game_user');
        $question2 = Cookie::get('Q2');
        return response()->view('try_image.partner_create_g2',['user' => $user, 'question2' => $question2]);
    }
    
    public function  partner_sub_store (Request $request)
    {
        // $data = $request->all();
        // $result = Try_image::create($data);
        $p_image2 = $request->input('image');
        Cookie::queue('p_image2', $p_image2);
        return redirect()->route('partner_image.subg3_create');
    }
    
    public function partner_subg3_create ()
    {
        $granularity_id = 3;
        $user = game_user::orderBy('created_at', 'desc')->first();
        $question3 = Cookie::get('Q3');
        return response()->view('try_image.partner_create_g3',['granularity' => $granularity_id, 'user' => $user, 'question3' => $question3]);
    }
    
    public function  partner_subg3_store (Request $request)
    {
        // $data = $request->all();
        // $result = Try_image::create($data);
        $p_image3 = $request->input('image');
        Cookie::queue('p_image3', $p_image3);
         return redirect()->route('content.create');
    }
   
    
    
    
}
