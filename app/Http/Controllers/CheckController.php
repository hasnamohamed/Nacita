<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function create()
    {
        return view('checks.create');
    }
}
