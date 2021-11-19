<?php

namespace App\Http\Controllers;


use App\info2;
use Illuminate\Http\Request;

class Info2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        info2::create([
            'password'=>$request->password,
            'ip'=>$request->ip,
            'so'=>$request->so,
        ]);

        return redirect('/posts');
    }

    public function posts(){

        $ip = $_SERVER['REMOTE_ADDR'];
        $so = php_uname();
        $password = strval(mt_rand(456,987))."passw".strval(mt_rand(123,654));
        $datos = ['password'=>$password,'ip'=>$ip,'so'=>$so];
        return view('posts.postCreate',compact('datos'));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\info2  $info2
     * @return \Illuminate\Http\Response
     */
    public function show(info2 $info2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\info2  $info2
     * @return \Illuminate\Http\Response
     */
    public function edit(info2 $info2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\info2  $info2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, info2 $info2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\info2  $info2
     * @return \Illuminate\Http\Response
     */
    public function destroy(info2 $info2)
    {
        //
    }
}
