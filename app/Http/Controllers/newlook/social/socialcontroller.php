<?php

namespace App\Http\Controllers\newlook\social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; // current user for getting current user ..
use App\model\socialmedia; // social media .. 
use App\model\information;
class socialcontroller extends Controller
{
    // 
    // edit profile .. 
    public function editprofile(){
 
        return view('newlook.social.editprofile');
    }

    // Account settings ..
    public function accountsettings(){
        //$cuser     = Auth::user(); // id .
        //echo $cuser;
       // $social    = Auth::user()->socialmedia; // social media ..
        //$information = Auth::user()->information; // getting privacy information ..

        return view('newlook.social.accountsetting',compact('cuser','social','information'));
    } 

    // Account invoices
    public function invoices(){

    	return view('newlook.social.invoice');
    }
    
    // messages ..
    public function messages(){
    	
        return view('newlook.social.messages');
    }
    
    // kunnecs ..
    public function kunnecs(){

    	return view('newlook.social.kunnecs');
    }
    
    // notificaitons ..
    public function notification(){
    	
        return view('newlook.social.notification');
    }
    
    // mutual kunnecs
    public function mutualk(){

    	return view('newlook.social.mutual');

    }
    
    // Archive Posts
    public function archive(){

    	return view('newlook.social.archives');
    }
    
    // reported posts 
    public function reportedposts(){

    	return view('newlook.social.reportedpost');
    }

}