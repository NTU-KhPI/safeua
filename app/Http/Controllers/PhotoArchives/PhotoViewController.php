<?php

namespace App\Http\Controllers\PhotoArchives;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Region;
use App\Models\Photo;

class PhotoViewController extends Controller
{
    public function index(Request $request){
        // $history = History::all();
        $history = History::Paginate(9);
        $regions = Region::all();
        return view("photo-archives.all-photos", compact('history', 'regions'));
        // return view("photo-archives.test", compact('history', 'photos', 'regions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required|image|mimes:png,jpg,jpeg|max:5120',
            'user_id' => 'required|numeric',
            'description' => 'required|max:255',
            'region_id' => 'required|numeric'
        ]);
        
        $imageRequest = $request->filename;
        $file_path = '/storage/photo/'.$imageRequest->hashName();
        $imageRequest->move(public_path('storage/photo/'), $imageRequest->hashName());

        $photo = new Photo();
        $photo->file_location = $file_path;
        $photo->tag = $request->description;
        $photo->region_id = $request->region_id;
        $photo->save();

        $history = new History();
        $history->title = $request->description;
        $history->tag = $request->description;
        $history->user_id = $request->user_id;
        $history->region_id = $request->region_id;
        $history->save();
        $history->photo()->attach($photo);

        return back()->with('success', 'Image uploaded Successfully!');
    }
}
