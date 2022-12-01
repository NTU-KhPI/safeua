<?php

namespace App\Http\Controllers\PhotoArchives;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PhotoArchives;

class PhotoUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = PhotoArchives::all();
        return view('photo-archives.test', compact('photos'));
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
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'user_id' => 'required|numeric',
            'description' => 'required|max:255',
            'region' => 'required|max:255'
        ]);

        $imageRequest = $request->image;
        $file_path = $imageRequest->hashName();
        $imageRequest->move(public_path('img/test'), $imageRequest->hashName());
        // $file_path = $imageRequest->hashName();


        $image = new PhotoArchives();
        $image->user_id = $request->user_id;
        $image->filename = $file_path;
        $image->origin = $imageRequest->getClientOriginalName();
        $image->description = $request->description;
        $image->region = $request->region;
        $image->save();

        return back()->with('success', 'Image uploaded Successfully!');
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
        // $image = PhotoArchives::findOrFail($id);
        // return view('edit-photo', compact('image'));
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
        $image = PhotoArchives::findOrFail($id);
        $image->delete();
    }
}
