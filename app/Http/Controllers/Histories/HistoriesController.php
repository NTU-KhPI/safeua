<?php

namespace App\Http\Controllers\Histories;

use App\Models\Region;
use App\Models\History;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoriesController extends Controller
{
    public function index(Request $request, $regionId = 0)
    {
        $historiesPerPage = 5;
        $histories = History::distinct()->latest()->orderBy('history_id', 'asc');
        $regionName = null;
        if ($regionId) {
            $histories = $histories->where('region_id', $regionId);
            $regionName =  Region::find($regionId)->name;
        }
        $searchLine = $request->histories_search;
        if ($searchLine) {
            $histories = $histories
                ->where('title', 'LIKE', "%{$searchLine}%")
                ->orwhere('tag', 'LIKE', "%{$searchLine}%")
                ->orWhere('body', 'LIKE', "%{$searchLine}%")
                ->orWhere('user_id', 'LIKE', "%{$searchLine}%");
        }
        $histories = $histories->paginate($historiesPerPage)->withQueryString();

        if ($request->ajax()) {
            $view = view('histories.historydata', [
                'histories' => $histories,
            ])->render();
            return response()->json([
                'pageContent' => $view,
                'lastPage' => $histories->lastPage(),
            ]);
        }

        return view('histories', [
            'histories' => $histories,
            'regionId' => $regionId,
            'regionName' => $regionName,
            'searchLine' => $searchLine,
            'uri' => $request->getUri(),
        ]);
    }

    // public function ShowHistoriesByRegion($regionId = 0)
    // {
    //     $lastHistories = History::latest();

    //     if ($regionId) {
    //         $lastHistories->where('region_id', $regionId);
    //         $regionName =  Region::find($regionId)->name;
    //     }

    //     return view('histories', [
    //         'histories' => $lastHistories->paginate(),
    //         'regionName' => $regionName,
    //     ]);
    // }

    // public function search(Request $request)
    // {
    //     if ($request->histories_search) {
    //         $search = $request->histories_search;
    //         $histories = History::latest()
    //             ->where('title', 'LIKE', "%{$search}%")
    //             ->orwhere('tag', 'LIKE', "%{$search}%")
    //             ->orWhere('body', 'LIKE', "%{$search}%")
    //             ->paginate(3);
    //     }
    //     // dd($histories);
    //     return view('histories', [
    //         'histories' => $histories,
    //     ]);
    // }
}