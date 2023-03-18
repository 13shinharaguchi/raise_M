<?php

namespace App\Http\Controllers;

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
        //$requestで入力されたデータを受け取り、なにかしらの変数にいれる
        //$requesここではallにしているが、ここで受取かたはいじることができる
         $data = $request->all();
        //  dd($data);
        //ここでgame_userDBに保存する、SQLをよしなに書いてくれるものcreateで新規作成をしてくれる
        $result = game_user::create($data);
        //次の動きをしていする
        //ここでは、次のやってみたいことを登録するに遷移
        return redirect()->route('wanna_try.create');
        // return view('wanna_try.create');
         
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
        return response()->view('user_register.partner_create');
    }
    
    public function partner_register_store (Request $request)
    {
        $data = $request->all();
        $result = game_user::create($data);
        return redirect()->route('partner_image.create');
    }
}
