<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    public function index($param)
    {
        $room = [
            'param' => $param
        ];
        return view('index', $room);
    }
}
