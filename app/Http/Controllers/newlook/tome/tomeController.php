<?php

namespace App\Http\Controllers\newlook\tome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\tome;
use Carbon\Carbon; // for the calculation purpose ..
use Illuminate\Support\Facades\Auth; // current user for getting current user ..
use App\model\jobsdoc; 
use App\model\category;

class tomeController extends Controller
{
    //
    public function index(){
    	// kunnec to me ..
    	$category = category::where('division','1')->get();
        return view('newlook.kunnec.kunnectome.add',compact('category')); // home ..
    }
    public function jobs(){ 
    	return view('newlook.kunnec.kunnectome.posts'); // home ..
    }
   
}
