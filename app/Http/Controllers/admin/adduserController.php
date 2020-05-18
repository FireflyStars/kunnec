<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\admin\admin;
use Validator;
class adduserController extends Controller
{
    // index is for add user ..
    public function index(){
    	// add user ..
    	return view('admin.settings.add-user');
    }
    //it's  making an admin ..
    public function makeadmin(Request $request){
    	// First it will check then it will add admin ..
		$validator = $this->Validate($request, [
            'name' => 'required|min:10',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
            'dob'  => 'required',
            'ph'  =>  'required',
        
        ]);
        
        $admin = new  admin;
        $admin->name     = $request->name;
        $admin->email    = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->dob 	 = $request->dob;
        $admin->ph		 = $request->ph;
		$admin->save();
		return redirect()->back()->with('message','Admin Created successfully');
    }
    public function admins(){
    	// List of users ..
    	$admins = admin::all();
    	return view('admin.settings.list',compact('admins'));
    }
	
    public function deleteadmin($id){
        $admin = admin::find($id); // checking admin if admin is visible ..
        $admin->delete();
        return redirect()->back()->with('message','Admin Removed successfully');
    }   
	        
}
