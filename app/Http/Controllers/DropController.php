<?php

namespace App\Http\Controllers;

use App\CarModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DropController extends Controller
{
    public function api(Request $request)
    {
        $data = $request->input('option');
        $maker = CarModel::find($data);
        $models = $maker->car()->get(['id','name']);
        $dat['data'] = $models;
        return response()->json($dat,200);

    }
}
