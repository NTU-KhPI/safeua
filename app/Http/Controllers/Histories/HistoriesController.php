<?php

namespace App\Http\Controllers\Histories;

use App\Models\Region;
use App\Models\History;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoriesController extends Controller
{
    public function index(Request $request)
    {
        $historiesPerPage = 5;
        $histories = History::distinct()->latest()->orderBy('history_id', 'asc')->paginate($historiesPerPage);

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
            'uri' => $request->getUri(),
        ]);
    }

    public function HistoriesByRegion(Request $request, $regionId = 0)
    {
        $historiesPerPage = 5;

        $regionName = null;
        if ($regionId) {
            $histories = History::query()->where('region_id', $regionId);
            $regionName =  Region::find($regionId)->name;
        }

        $histories = $histories->distinct()->latest()->orderBy('history_id', 'asc')->paginate($historiesPerPage);

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
            'uri' => $request->getUri(),
        ]);
    }

    public function search(Request $request)
    {
        $historiesPerPage = 5;

        $searchLine = $request->q;
        if ($searchLine) {
            $histories = History::query()
                ->where('title', 'LIKE', "%{$searchLine}%")
                ->orwhere('tag', 'LIKE', "%{$searchLine}%")
                ->orWhere('body', 'LIKE', "%{$searchLine}%")
                ->orWhere('user_id', 'LIKE', "%{$searchLine}%");
        }
        $histories = $histories->distinct()->latest()->orderBy('history_id', 'asc')->paginate($historiesPerPage)->withQueryString();

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
            'searchLine' => $searchLine,
            'uri' => $request->getUri(),
        ]);
    }
}