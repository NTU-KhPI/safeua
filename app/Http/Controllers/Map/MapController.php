<?php

namespace App\Http\Controllers\Map;

use App\Models\Region;
use App\Models\History;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function index(Request $request)
    {
        $regions = Region::all();

        $histories = History::latest()->paginate(5);

        $lasthistory = [];
        foreach ($regions as $region) {
            $lasthistory[] = History::where('region_id', $region->region_id)->latest()->first();
        }

        if ($request->ajax()) {
            $view = view('map.historydata', compact('histories'))->render();
            return response()->json([
                'pageContent' => $view,
                'lastPage' => $histories->lastPage(),
            ]);
        }
        return view('map', [
            'historiesByRegion' => $lasthistory,
            'histories' => $histories,
        ]);
    }
}