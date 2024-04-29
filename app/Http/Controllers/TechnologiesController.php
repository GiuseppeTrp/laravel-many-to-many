<?php

namespace App\Http\Controllers;

use App\Models\Technologies;
use App\Http\Requests\StoreTechnologiesRequest;
use App\Http\Requests\UpdateTechnologiesRequest;

class TechnologiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTechnologiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Technologies $technologies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technologies $technologies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTechnologiesRequest $request, Technologies $technologies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technologies $technologies)
    {
        //
    }
}
