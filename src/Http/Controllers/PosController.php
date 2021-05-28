<?php

namespace Piseth\Pos\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Piseth\Pos\Models\Test;

class PosController extends Controller
{
    public function index()
    {
        return view("pos::homepage/index");
    }

    public function store(Request $request)
    {
        $tests = new Test();
        $tests->name = $request->name;
        $tests->save();
    }
}
