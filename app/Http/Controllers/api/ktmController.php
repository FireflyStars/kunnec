<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\tome;
use Auth;
class ktmController extends Controller
{
    //
    public function check(){
        return Auth::id();
    }

    public function jobpost(Request $request) {
    	$id = Auth::id();
    	
    	$this->validate($request, [
    			'title' => 'required|string',
	    		'description' => 'required|string',
	    		'category' => 'required|integer',
	    		'subcategory'   =>  'required|integer',
	    		'jtype'     =>  'required|string',
	    		'skill'       =>  'required',
	    		'ldate'       =>  'required',
	    		'salary'      =>  'integer'      
    	]);

    	$job = new tome;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->jobcategory = $request->category;
        $job->jobsubcat   = $request->subcategory;
        $job->jobtype     = $request->jtype;
        $job->hrate       = $request->hrate;
        $job->skill       = $request->skill;
        $job->lastdate    = $request->ldate;
        $job->salary      = $request->salary;
        $job->user_id     = $id;
        $job->save();
    	
    	return ['message'=>'Data is transfered'];
    }

    public function opprtunities(){
        $jobs = tome::orderby('id','desc')->get();
        //return  Auth::id();
        return response()->json($jobs);
    }
    public function delete($id){
        $job = tome::find($id);
        $job->delete();
        return ['message' => 'Deleted Succesfully'];
    }
}

