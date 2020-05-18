<?php

namespace App\Http\Controllers\post;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\model\post;
class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $user = user::id(); // current user id ..
        $post = post::where('user_id',$user)->get(); // getting post ...
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
        // its getting user id of current user ...
        $userid = Auth::id();
        $post = new post; // its creating new object ...
        $description = $request->description; // description ..
        // its checking if description is visible ..
        if(!empty($request->hasfile('up'))){
            Validator([
                'up' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = $request->file('up'); 
            $fileName = time().'.'.$image->getClientOriginalName();
            $request->up->move(public_path('uploads'), $fileName);
            // its checking if file data is visible by user ..
            $post->photo = $fileName;      
        }

        if(!empty($description)){
             $post->description = $description;
        }
        
        $post->user_id = $userid; // storing user id in user table .. 
        $post->save(); // getting save all data ..
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
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
        //
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
        //
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
        post::find($id)->delete();
        return redirect()->back();
    }
}
