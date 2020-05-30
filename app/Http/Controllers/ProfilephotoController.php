<?php

namespace App\Http\Controllers;
use Validator;
use App\model\profilephoto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class ProfilephotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
    
        $this->middleware('auth');
    
    }
     
    public function index(){
        // current user id..
        $user = Auth::id(); // user id ..
        $pphotos = profilephoto::where('user_id',$user)->get(); // getting all current user id images.
        return view('home.gallery',compact('pphotos')); // redirecting it ont gallery page ..
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
        $user = Auth::id(); // thats getting current user
        if(!empty($request->hasfile('image'))){
            Validator([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = $request->file('image'); 
            $fileName = time().'.'.$image->getClientOriginalName();
            $request->image->move(public_path('uploads'), $fileName);
            // its checking if file data is visible by user ..
            // now its update profile images ..
            $updateprofileimage = User::where('id',$user)->update(['dp'=>$fileName]);
            // also saving it in other tables whose name is profilephotos because of previous history images ..
            $pimage = new profilephoto;
            $pimage->user_id = $user;
            $pimage->photo  = $fileName;
            $pimage->save();
            // image in profilephoto table saved ..
            return redirect()->back();     
        } else {
            // image is not visible then it will redirect back ..
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\profilephoto  $profilephoto
     * @return \Illuminate\Http\Response
     */
    public function show(profilephoto $profilephoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\profilephoto  $profilephoto
     * @return \Illuminate\Http\Response
     */
    public function edit(profilephoto $profilephoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\profilephoto  $profilephoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profilephoto $profilephoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\profilephoto  $profilephoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilephoto $profilephoto)
    {
        //
    }
}
