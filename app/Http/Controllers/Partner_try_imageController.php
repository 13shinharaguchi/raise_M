<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Try_image;
use App\Models\game_user;

class Partner_try_imageController extends Controller
{
    public function partner_create ()
    {
        $granularity_id = 1;
        $user = game_user::orderBy('created_at', 'desc')->first();
        return response()->view('try_image.partner_create',['granularity' => $granularity_id , 'user' => $user]);
    }
    
    public function partner_store (Request $request)
    {
        $data = $request->all();
        // dd($data);
        $result = Try_image::create($data);
        return redirect()->route('partner_image.sub_create');
    }
    
    public function partner_sub_create ()
    {
        //フォルダー名も最初につけてあげる必要がある
        $granularity_id = 2;
        $user = game_user::orderBy('created_at', 'desc')->first();
        return response()->view('try_image.partner_create_g2',['granularity' => $granularity_id, 'user' => $user]);
    }
    
    public function  partner_sub_store (Request $request)
    {
        $data = $request->all();
        // dd($data);
        $result = Try_image::create($data);
        return redirect()->route('partner_image.subg3_create');
    }
    
    public function partner_subg3_create ()
    {
        //フォルダー名も最初につけてあげる必要がある
        $granularity_id = 3;
        $user = game_user::orderBy('created_at', 'desc')->first();
        return response()->view('try_image.partner_create_g3',['granularity' => $granularity_id, 'user' => $user]);
    }
    
    public function  partner_subg3_store (Request $request)
    {
        $data = $request->all();
        // dd($data);
        $result = Try_image::create($data);
        //  return response()->view('welcome');
         return redirect()->route('content.create');
    }
   
    
    
    
}
