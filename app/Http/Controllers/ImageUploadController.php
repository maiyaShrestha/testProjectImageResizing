<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('image_upload_form');
    }

    //uploading and resizing image;
  public function uploadImage(){
    if (Input::hasFile('avatar'))
    {
        $file = Input::file('avatar');
        $file->move('uploads', $file->getClientOriginalName());

        $image = Image::make(sprintf('uploads/%s', $file->getClientOriginalName()))->resize(200, 200)->save();
    }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
