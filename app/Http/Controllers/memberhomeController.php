<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // request .. 
use Illuminate\Support\Facades\Auth; // current user for getting current user ..
use App\model\post; // getting all posts ..
use App\Model\friendship; // getting all requests ..
use App\user; // getting all user ..
use Carbon\Carbon; // for the calculation purpose ..
use App\model\friend; // friends getting from database ..
use App\model\socialmedia; // social media .. 
use App\model\information;
use App\model\education; // education ..
use App\model\credit; // credit ..
class memberhomeController extends Controller {
    
    public function home(){
        // its getting user id of current user for getting post  ...
        $userid  = Auth::id(); // all users details ..
        $users   = user::all(); // Its getting posts of current user ..
        $post    = post::where('user_id',$userid)->orderby('ID','DESC')->get(); // its getting all data ..
        return view('home.home' , compact('post','users')); // home newsfeed page ..
    }
    
    // browse ..
    public function browse(){
    	// browse page ..
        $userid = Auth::id(); // all users details ..
        $users = user::all(); // getting all users from database ..
        $requests = friendship::where('sender_id',$userid)->orwhere('receiver_id',$userid)->get(); // getting all request..
        $friends  = friend::all(); // getting friends ..
        return view('home.browse' , compact('users','requests'));
    }
    // credit page ..
    public function credit(){
    	// credit page ..
        $currect_user = Auth::id(); // current user id ..
        $credit = credit::where('user_id',$currect_user)->first();
        return view('home.credit',compact('credit'));
    }
    // payout page ..
    public function payout(){

    	return view('home.payout');
    }
    // setting page ..
    public function settings(){
        $cuser     = Auth::user(); // id .
        $social    = Auth::user()->socialmedia; // social media ..
        $information = Auth::user()->information; // getting privacy information ..
        return view('home.setting',compact('cuser','social','information'));
    }
    // messages ..
    public function messages(){
      // $friends = Auth::user()->friends;
      //return $friends;
      // 0return "test";
       return view('home.messages'); // kunnecs ..
 	
    }
    public function message(){
       return "asd";
       //$friends = Auth::user()->friends();
       //return view('home.messages', ['friends' => $friends]); // kunnecs ..
    }
    // photos ..
    public function photos(){

    	return view('home.photos'); 

    }
    // kunnecs ..
    public function kunnecs(){
        // friends ..
        $friends = Auth::user()->friends;
        return view('home.kunnecs',compact('friends')); // kunnecs ..
    }
    // setup ..
    public function setup(){

    	return view('home.setup'); 
    }
    // for profile page ..
    public function profile(){
        // its getting user id of current user for getting post  ...
        $userid = Auth::id();
        // all users details ..
        $users   = user::all();
        
        // Its getting posts of current user ..
        $post = post::where('user_id',$userid)->orderby('ID','DESC')->get(); // its getting all data.
        
        //return view('home.profile' , compact('users','post')); // return ..
    }
    public function userprofile($id){
        $user        = user::where('id',$id)->first();
        $education   = education::where('user_id',$id)->get(); // education ..
        $information = information::where('user_id',$id)->first();  // education ..
        // Its getting posts of current user ..
       // return view('home.profile' , compact('user','post','education','information')); // return ..
        return $id;
    }
}
