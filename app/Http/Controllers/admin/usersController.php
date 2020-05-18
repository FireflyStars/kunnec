<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use Carbon\Carbon; // for the calculation purpose ..
class usersController extends Controller
{
    //
    public function users(){
        
        $users = user::where('is_activated','1')->get(); // all users ..
        return json_encode($users);
        //return view('admin.user.user', compact('users')); // going on users ..
    }
    public function user($id){
          $users = user::find($id); // all users ..
        return json_encode($users);
        //return view('admin.user.user', compact('users')); // going on users ..
    }
    public function deactivate(){
        $users = user::where('is_activated','0')->get(); // all users ..
    	return view('admin.user.deactivate', compact('users')); // going on deactivate
    }
    public function flag(){
    	return view('admin.user.flag'); // on flag page ..
    }
    public function disable($id){
        $user = user::find($id)->update([ 'is_activated' => '0' ]);
        return redirect()->back();
    }
    public function active($id){
        $user = user::find($id)->update([ 'is_activated' => '1' ]);
        return redirect()->back()->with('message','User Activated Successfully');
    }
}
