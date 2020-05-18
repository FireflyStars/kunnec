<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class creditController extends Controller
{
    //
    public function credit(){
    	return view('admin.credit.credit');
    }
}
