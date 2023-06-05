<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masters = Master::all();

        return view('back.masters.index', [
            'masters' => $masters
        ]);
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
    public function store(StoreMasterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMasterRequest $request, Master $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Master $master)
    {
        //
    }
}