<?php

namespace App\Http\Controllers\Map;

use App\Models\Region;
use App\Models\History;

use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function index()
    {
        $regions = Region::all();

        $latestHistories = [];
        foreach ($regions as $region) {
            $latestHistories[] = History::where('region_id', $region->region_id)->latest()->first();
        }

        return view('map', [
            'latestHistories' => $latestHistories,
        ]);
    }
}