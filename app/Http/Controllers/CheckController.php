<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function create()
    {
        return view('checks.create');
    }
    public function store()
    {
        dd('here');
    }
    public function edit()
    {
        return view('checks.create');
    }
    public function update()
    {
        return view('checks.create');
    }
    public function show()
    {
        return view('checks.create');
    }
    public function destroy()
    {
        return view('checks.create');
    }
}
