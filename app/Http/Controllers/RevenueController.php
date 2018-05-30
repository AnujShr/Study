<?php

namespace App\Http\Controllers;

use App\Performance;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
    public function index()
    {
        $performance = Performance::thisYear()
            ->selectRaw('DATE_FORMAT(created_at, "%M %Y") as name , SUM(revenue) as count')
            ->groupBy(DB::raw('MONTH(created_at) ASC, name ASC'))
            ->pluck('count', 'name');

        $performance2 = Performance::yearBefore()
            ->selectRaw('DATE_FORMAT(created_at, "%M") as name , SUM(revenue) as count')
            ->groupBy(DB::raw('MONTH(created_at) ASC, name ASC'))
            ->pluck('count', 'name');
        return view('/home/revenue', compact('performance','performance2'));



    }
}
