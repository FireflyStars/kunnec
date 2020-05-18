<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // fot get current user ..
use App\user; // for get users ..
use Carbon\Carbon; // for the calculation purpose ..
use App\model\post; // getting post ..
use Illuminate\Http\Request;
use App\model\education; // education ..
use App\model\information; // information ..
use DB;
use App\model\album;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // its getting user id of current user for getting post  ...
        // current users details ..
        $userid  = Auth::id(); // all users details ..
        $users   = user::all(); // Its getting posts of current user ..
        $post    = post::where('user_id',$userid)->orderby('ID','DESC')->get(); // its getting all data ..
        
        $upload = Auth::user()->dp; // its getting dp ..
        $imgpost   = DB::table('postmedias')->where('user_id',$userid)->first(); // Its geting post ..
        $albums = album::where('user_id',$userid)->get();  //  

        $user        = Auth::user();
        //$id          = $user->id;
        $education   = Auth::user()->education; // education ..
        // Its getting posts of current user ..
        $information = Auth::user()->information;
        $cuser     = Auth::user(); // id .
        $social    = Auth::user()->socialmedia; // social media ..
        $information = Auth::user()->information; // getting privacy information ..
        return view('home.profile' , compact('user','education','information','cuser','users','social','post','imgpost','upload','albums')); // return ..
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // user .. cx
        $user = user::find($id); // find ..
        $education   = education::where('user_id',$id)->get(); // education ..
        $inf = information::where('user_id',$id)->first();  // education ..
        return view('home.edit-profile',compact('user','inf','education')); // view ..
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

        $inf = $request->description;
        if(!empty($inf)){
             $information = information::where('user_id',$id)->first();   
             if(!empty($information)){
                
                $information = information::where('user_id',$id)->first();
                $information->description = $request->description;
                $information->save();
             
             } else {
                $infromation = new information;
                $information->description =  $request->description;
                $information->user_id      =  $id;
                $infromation->save();
             }
        }

        $user = user::find($id);
        $user->fname = $request->fname;
        $user->lname     = $request->lname;
        $user->email    = $request->email;
        $user->ph       = $request->phone;
        $user->gender   = $request->gender;
        $user->dob      = $request->dob;
        $user->save();
        
       return redirect()->back()->with('message','profile updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
