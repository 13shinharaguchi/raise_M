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
        $random_image1 = Try_image::where('granularity_number', 1)->inRandomOrder()->first();
        $random_image2 = Try_image::where('granularity_number', 2)->inRandomOrder()->first();
        $random_image3 = Try_image::where('granularity_number', 3)->inRandomOrder()->first();
        return response()->view('table_of_contents.index',['user' => $user,
                                                           'image1' => $random_image1,
                                                           'image2' => $random_image2,
                                                           'image3' => $random_image3]);
    }
    
    public function all ()
    {
        $main_user = game_user::orderBy('created_at')->first();
        $partner_user = game_user::orderBy('created_at', 'desc')->first();
        $main_record = try_image::where('game_user_number', $main_user -> id)->get();
        $partner_record = try_image::where('game_user_number', $partner_user -> id)->get();
        // dd($records);
        return response()->view('table_of_contents.show_all',['main_records' => $main_record, 'partner_records' => $partner_record]);
    }
    
}