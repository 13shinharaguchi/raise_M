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
        $user = Cookie::get('game_user');
        $wanna_try = Cookie::get('wanna_try');
        $image1 = Cookie::get('image1');
        $image2 = Cookie::get('image2');
        $image3 = Cookie::get('image3');
        $p_image1 = Cookie::get('p_image1');
        $p_image2 = Cookie::get('p_image2');
        $p_image3 = Cookie::get('p_image3');
        
        $all_image1 = [$image1, $p_image1];
        $random_image1 = $all_image1[array_rand($all_image1)];
        
        $all_image2 = [$image2, $p_image2];
        $random_image2 = $all_image1[array_rand($all_image2)];
        
        $all_image3 = [$image3, $p_image3];
        $random_image3 = $all_image1[array_rand($all_image3)];
        
        return response()->view('table_of_contents.index',['user' => $user,
                                                           'wanna_try' => $wanna_try,
                                                           'random_image1' => $random_image1,
                                                           'random_image2' => $random_image2,
                                                           'random_image3' => $random_image3,
                                                           ]);
    }
    
    public function all ()
    {
        $user = Cookie::get('game_user');
        $partner_user = Cookie::get('partner_game_user');
        $image1 = Cookie::get('image1');
        $image2 = Cookie::get('image2');
        $image3 = Cookie::get('image3');
        $p_image1 = Cookie::get('p_image1');
        $p_image2 = Cookie::get('p_image2');
        $p_image3 = Cookie::get('p_image3');
        return response()->view('table_of_contents.show_all',['user' => $user,
                                                              'partner_user' => $partner_user,
                                                              'image1' => $image1,
                                                              'image2' => $image2,
                                                              'image3' => $image3,
                                                              'p_image1' => $p_image1,
                                                              'p_image2' => $p_image2,
                                                              'p_image3' => $p_image3,
                                                              ]);
        
        // $images = ['image1', 'image2', 'image3', 'p_image1', 'p_image2', 'p_image3'];
        // $random_images = [];

        // foreach ($images as $image) {
        //     $random_images[$image] = Cookie::get($image);
        // }

        // return response()->view('table_of_contents.show_all', $random_images);
    }
    
}