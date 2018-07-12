<?php

namespace App\Http\Controllers;

use App\Add;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index()
    {

        $lists = Add::orderBy('id', 'desc')->take(5)->get();
        return view('add', compact('lists'));
    }

    public function store(Request $request)
    {

        $data = $request->input();
        for ($i = 1; $i <= $data['counter']; $i++) {
            $new['name'] = $data['name_' . $i];
            $new['description'] = $data['description_' . $i];
            $new['qty'] = $data['qty_' . $i];
            $v = Add::create($new);
        }
        $return['list'] = Add::orderBy('id', 'desc')->take(5)->get();
        $return['success'] = 'Ok';
        return response()->json($return);
    }

}
