<?php

namespace App\Http\Controllers\newlook\sell;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\mystore;
class shopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // current ..
        $c = 1;
        // store ...
        $store = mystore::where('user_id',$c)->count();
        // checking if store is visible or not ..
        if($store == 0) {
            // mystore ...
            return view('newlook.kunnec.kunnecshop.createstore');

        } else {
            // my store ...
            $mystore = mystore::where('user_id',$c)->first();
            return view('newlook.kunnec.kunnecshop.mystore',compact('mystore'));

        } 

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
    public function store(Request $request)
    {
        //
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
}