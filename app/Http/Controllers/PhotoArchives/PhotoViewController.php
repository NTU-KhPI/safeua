<?php

namespace App\Http\Controllers\PhotoArchives;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class PhotoViewController extends Controller
{
    public function view(Request $request){
        $history = History::Paginate(9);
        return view("photo-archives.all-photos", compact('history'));
    }
}
