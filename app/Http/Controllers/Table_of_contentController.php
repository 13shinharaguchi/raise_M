<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $user = game_user::orderBy('created_at')->first();
        $random_image1 = Try_image::where('granularity_id', 1)->inRandomOrder()->first();
        $random_image2 = Try_image::where('granularity_id', 2)->inRandomOrder()->first();
        $random_image3 = Try_image::where('granularity_id', 3)->inRandomOrder()->first();
        // dd($randomRecords);
        return response()->view('table_of_contents.index',['user' => $user,
                                                           'image1' => $random_image1,
                                                           'image2' => $random_image2,
                                                           'image3' => $random_image3]);
    }
}