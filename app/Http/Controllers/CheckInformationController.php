<?php

namespace App\Http\Controllers;

use App\Models\Check_information;
use App\Http\Requests\StoreCheck_informationRequest;
use App\Http\Requests\UpdateCheck_informationRequest;

class CheckInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCheck_informationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheck_informationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Check_information  $check_information
     * @return \Illuminate\Http\Response
     */
    public function show(Check_information $check_information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Check_information  $check_information
     * @return \Illuminate\Http\Response
     */
    public function edit(Check_information $check_information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCheck_informationRequest  $request
     * @param  \App\Models\Check_information  $check_information
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCheck_informationRequest $request, Check_information $check_information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Check_information  $check_information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check_information $check_information)
    {
        //
    }
}
