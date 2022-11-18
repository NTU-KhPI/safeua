<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Region;
use App\Models\History;
use App\Filters\PostFilter;

class MapController extends Controller
{
    public function index(Request $request)
    {
        $regions = Region::all();
        $histories = History::orderBy('updated_at', 'desc')->paginate(5);

        if ($request->ajax()) {
            $view = view('map.historydata',compact('histories'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('map', compact('regions', 'histories'));
    }
}