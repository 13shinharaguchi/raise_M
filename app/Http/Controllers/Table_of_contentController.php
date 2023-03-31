<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Try_image;
use App\Models\game_user;

class Table_of_contentController extends Controller
{
    public function create ()
    {
        return response()->view('table_of_contents.create');
    }
    
    public function index ()
    {
        // $user = game_user::orderBy('created_at')->first();
        $user = Cookie::get('game_user');
        // $random_image1 = Try_image::where('granularity_number', 1)->inRandomOrder()->first();
        // $random_image2 = Try_image::where('granularity_number', 2)->inRandomOrder()->first();
        // $random_image3 = Try_image::where('granularity_number', 3)->inRandomOrder()->first();
        $random_image1 = Cookie::get('image1');
        $random_image2 = Cookie::get('image2');
        $random_image3 = Cookie::get('image3');
        return response()->view('table_of_contents.index',['user' => $user,
                                                           'image1' => $random_image1,
                                                           'image2' => $random_image2,
                                                           'image3' => $random_image3]);
    }
    
    public function all ()
    {
        // $main_user = game_user::orderBy('created_at')->first();
        // $partner_user = game_user::orderBy('created_at', 'desc')->first();
        // $main_record = try_image::where('game_user_number', $main_user -> id)->get();
        // $partner_record = try_image::where('game_user_number', $partner_user -> id)->get();
        
        $random_image1 = Cookie::get('image1');
        $random_image2 = Cookie::get('image2');
        $random_image3 = Cookie::get('image3');
        $p_random_image1 = Cookie::get('p_image1');
        $p_random_image2 = Cookie::get('p_image2');
        $p_random_image3 = Cookie::get('p_image3');
        return response()->view('table_of_contents.show_all',['image1' => $random_image1,
                                                              'image2' => $random_image2,
                                                              'image3' => $random_image3,
                                                              'p_image1' => $p_random_image1,
                                                              'p_image2' => $p_random_image2,
                                                              'p_image3' => $p_random_image3,
            ]);
    }
    
}