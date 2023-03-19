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
}
