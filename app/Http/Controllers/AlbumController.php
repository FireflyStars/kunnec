<?php

namespace App\Http\Controllers;

use App\model\album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\model\post;
use App\user;

class AlbumController extends Controller
{
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        // its getting timeline images of user for make an album ..
        $userid = Auth::id(); // getting current user id ..
        $upload = Auth::user()->dp; // its getting dp ..
        $post   = DB::table('postmedias')->where('user_id',$userid)->first(); // Its geting post ..
        $albums = album::where('user_id',$userid)->get();  //  
        return view('home.photos',compact('post','upload','albums')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        //
        $userid = Auth::id(); // getting user id of current user .. 
        $album = new album;  // getting new objects ..
        $album->name   = $request->title; // request  for title ..
        $album->user_id = $userid; // storing userid in database by using object ..
        $album->save(); // saving post ..
        return redirect()->back(); // redirect back ..
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(album $album)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(album $album)
    {
        //
    }
}
