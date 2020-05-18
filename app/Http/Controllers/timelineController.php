<?php

namespace App\Http\Controllers;
use App\model\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class timelineController extends Controller
{
    // these images for timeline phot album ..
    public function photos(){
    	$user = Auth::id(); // current user id ..
    	$pphotos = post::where('user_id',$user)->get(); //post ..
    	return view('home.gallery',compact('pphotos')); // photos ..
    }
}
