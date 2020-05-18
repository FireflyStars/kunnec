<?php

namespace App\Http\Controllers;

use App\model\socialmedia;
use Illuminate\Support\Facades\Auth; // fot get current user ..
use Illuminate\Http\Request;


class SocialmediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Asad";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // social media ..
        $social = new socialmedia;
        $social->website    = $request->website;
        $social->facebook   = $request->facebook;
        $social->instagram  = $request->instagram;
        $social->twitter    = $request->twitter;
        $social->youtube    = $request->youtube;
        $social->soundcloud = $request->soundcloud;
        $social->github     = $request->github;
        $social->gplus      = $request->gplus;
        $social->tumblr     = $request->tumblr;
        $social->pintrest   = $request->pintrest;
        $social->linkdn     = $request->linkedn;
        $social->reddit     = $request->reddit;
        $social->whatsapp   = $request->whatsapp;
        $social->user_id     = Auth::id();
        $social->Save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function show(socialmedia $socialmedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function edit(socialmedia $socialmedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $cid = Auth::id(); // id ..
        $social = socialmedia::where('user_id',$cid)->first();
        $social->website    = $request->website;
        $social->facebook   = $request->facebook;
        $social->instagram  = $request->instagram;
        $social->twitter    = $request->twitter;
        $social->youtube    = $request->youtube;
        $social->soundcloud = $request->soundcloud;
        $social->github     = $request->github;
        $social->gplus      = $request->gplus;
        $social->tumblr     = $request->tumblr;
        $social->pintrest   = $request->pintrest;
        $social->linkdn     = $request->linkedn;
        $social->reddit     = $request->reddit;
        $social->whatsapp   = $request->whatsapp;
        $social->user_id     = Auth::id();
        $social->Save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\socialmedia  $socialmedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(socialmedia $socialmedia)
    {
        //
    }
}
