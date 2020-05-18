<?php

namespace App\Http\Controllers\tome;

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


    	$category = category::where('division','1')->get();
        return view('home.kunnectome.kunnec-to-me',compact('category')); // home ..
    
    }
    public function jobs(){
        // jobs ..
        $jobs = tome::where('user_id', auth::id())->orderby('id','desc')->paginate(10);
    	//return $jobs;
        return view('home.kunnectome.jobs',compact('jobs')); //  kunnec 
    }
    // post job .. 
    public  function postjob($id , Request $request){
        
        $job = new tome;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->jobcategory = $request->category;
        $job->jobsubcat   = $request->subcategory;
        $job->jobtype     = $request->jtype;
        $job->hrate       = $request->hrate;
        $job->skill       = $request->skill;
        $job->salary      = $request->salary;
        $job->lastdate    = $request->ldate;
        $job->user_id      = $id;
        $job->save();

        if(!empty($request->hasfile('image'))){
            Validator([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,docs,php|max:2048',
            ]);

            $image = $request->file('image'); 
            $fileName = time().'.'.$image->getClientOriginalName();
            $request->image->move(public_path('uploads'), $fileName);
            // its checking if file data is visible by user ..
            // also saving it in other tables whose name is profilephotos because of previous history images ..
            $job->jobdoc = $fileName;
            
            // image in profilephoto table saved ..
        }

        return redirect()->back()->with('message','Job posted succesfully');
    }
    
    public function deletejob(Request $request){
        $jobid = $request->jobid;
        $jobs  = tome::find($jobid)->delete();
        return redirect()->back()->with('message','succesfully Deleted');
    }
    public function show($id){
        // kunnec to me ..
        $job = tome::find($id);
        // returinng to kunnec to me ..
        return view('home.kunnectome.job',compact('job'));
    }
}
