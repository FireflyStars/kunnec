<?php

namespace App\Http\Controllers;

use App\model\education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EducationController extends Controller
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
        
       // return $request;
        // education ..
        $education = new education; // education ..
        $education->title  = $request->title; // title .. 
        $education->school = $request->school; // school ..
        $education->startyear  = $request->start; // start ..
        $education->endyear    = $request->end; // end ..
        $education->description = $request->description; // description ..
        $education->user_id      = Auth::user()->id; // user id ..
        $education->save(); // save ..
        return redirect()->back()->with('message','Educaion Added succesfully'); // back ..
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\model\education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(education $education) {
        //   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, education $education)
    {   //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(education $education) {
        //
        $id = $education->id; // getting id 
        education::find($id)->delete();
        return redirect()->back()->with('message','Education Deleted Succesfully'); // redirect back ..  
    }
}
