<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index()
    {
        $anuj = collect(['name' => 'Anuj', 'wins' => '140']);
        $jeff = collect(['name' => 'Jeff', 'wins' => '80']);
        return view('home/wins', compact('anuj','jeff'));
    }
}
