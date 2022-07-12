<?php

namespace App\Http\Controllers;

use App\Models\ApiPublic;
use Illuminate\Http\Request;

class ApiPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Index";
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiPublic  $apiPublic
     * @return \Illuminate\Http\Response
     */
    public function show(ApiPublic $apiPublic)
    {
        return view('movies');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiPublic  $apiPublic
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiPublic $apiPublic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApiPublic  $apiPublic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiPublic $apiPublic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiPublic  $apiPublic
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiPublic $apiPublic)
    {
        //
    }
}
