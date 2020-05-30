<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // fot get current user ..
use App\model\information;
class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
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

        $userid = Auth::id();
        $information = information::where('user_id',$userid)->get();
        if(count($information) > 0){
        information::where('user_id',$userid)->update(['description' => $request->description]);
        } else {
          $inf = new information; // information ..
          $inf->description = $request->description; // description ..
          $inf->userid      = $userid; // current user id ..
          $inf->save(); // save ();
        }
       return redirect()->back()->with('message','Information updated succesfully'); // back ..
       // jhl
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(information $information)
    {
        //
    }
}
