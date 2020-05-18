<?php

namespace App\Http\Controllers;

use App\model\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // current user for getting current user ..
use App\model\information;
use App\model\friend;

class SettingsController extends Controller {
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
        $userid = Auth::id(); // settings ..
        $info   = information::where('user_id',$userid)->get();
        if(count($info) > 0 ){
            // info ...
            $info   = information::where('user_id',$userid)->first();
            $info->showtimeline = $request->tim6eline;
            $info->showphone    = $request->phone;
            $info->user_id       = $userid;
            $info->save();
            // save ..
        } else {
            // new information ..
            $inf    = new information;
            $inf->showtimeline = $request->timeline;
            $inf->showphone    = $request->phone;
            $inf->user_id       = $userid;
            $inf->save();
            // save ...
        }
        //  redirecting back  to  previous page ..
        return redirect()->back()->with('message','Settings Updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function unblock($id){

        $friends = friend::where('friendid',$id)->orwhere('userid',$id)->first();
        $status  = $friends->status;
        if($status == 'block'){
                $friends->status = "friends";
                $friends->save();
                return "1";
        } else {
            return "2";
        }
    }

    public function edit(settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, settings $settings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(settings $settings)
    {
        //
    }
}
