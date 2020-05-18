<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class alertController extends Controller
{
    //
        // forward ..
    public function forward(){

    	return view('admin.alert.forward'); // forward ..

    }
    // receive ..
    public function receive(){
    	return view('admin.alert.received'); //  receive ..
    }
    public function flag(){
    	return view('admin.alert.flag'); // flag ..
    }
}
