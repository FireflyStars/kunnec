<?php

namespace App\Http\Controllers;

use App\model\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $photos_path;
 
    public function __construct()
    {
        $this->photos_path = public_path('/uploads');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.upload.upload');
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

         $photos = $request->file('file');
 
        if (!is_array($photos)) {
            $photos = [$photos];
        }
 
        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }
 
        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();
 
            Image::make($photo)
                ->resize(250, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save($this->photos_path . '/' . $resize_name);
 
            $photo->move($this->photos_path, $save_name);
 
            $upload = new Upload();
            $upload->filename = $save_name;
            $upload->resized_name = $resize_name;
            $upload->original_name = basename($photo->getClientOriginalName());
            $upload->save();
        }
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(upload $upload)
    {
        //
        $filename = $request->id;
        $uploaded_image = Upload::where('original_name', basename($filename))->first();
 
        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }
 
        $file_path = $this->photos_path . '/' . $uploaded_image->filename;
        $resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;
 
        if (file_exists($file_path)) {
            unlink($file_path);
        }
 
        if (file_exists($resized_file)) {
            unlink($resized_file);
        }
 
        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }
 
        return Response::json(['message' => 'File successfully delete'], 200);
    }
}
