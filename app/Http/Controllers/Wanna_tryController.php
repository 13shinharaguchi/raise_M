<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wanna_tryController extends Controller
{
    public function create (){
         return response()->view('try_image.create');
    }
}
