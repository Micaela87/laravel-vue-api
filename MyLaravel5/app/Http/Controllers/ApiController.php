<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;

class ApiController extends Controller
{
    public function getAllTvSeries() {
        $allSeries = Series::all();

        return response()->json(['data' => $allSeries]);
    }

    public function deleteTvSeries($id) {

        $tvSeriesToDelete = Series::findOrFail($id);

        $tvSeriesToDelete -> delete();

        return response()->json(['data' => Series::all()]);
    }

    public function getSingleTvSeries($id) {

        $singleTvSeries = Series::findOrFail($id);

        return response()->json(['data' => $singleTvSeries]);
    }
}
