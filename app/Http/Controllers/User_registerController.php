<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Models\game_user;

class User_registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cookie_kinds = ['wanna_try','image1', 'image2', 'image3', 'p_image1','p_image2','p_image3','game_user','partner_game_user'];
        foreach ($cookie_kinds as $cookie_kind) {
            Cookie::queue(Cookie::forget($cookie_kind));
        }
        return response()->view('user_register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game_user = $request->input('game_user');
        Cookie::queue('game_user', $game_user);
        return redirect()->route('wanna_try.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function partner_register ()
    {
        $user = Cookie::get('game_user');
        $wanna_try = Cookie::get('wanna_try');
        return response()->view('user_register.partner_create',['user' => $user, 
                                                                'wanna_try' => $wanna_try]);
    }
    
    public function partner_register_store (Request $request)
    {
        $partner_game_user = $request->input('partner_game_user');
        Cookie::queue('partner_game_user', $partner_game_user);
        return redirect()->route('partner_image.create');
    }
}
