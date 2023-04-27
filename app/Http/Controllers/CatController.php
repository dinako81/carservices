<?php

namespace App\Http\Controllers;

use App\Models\Cat;


class CatController extends Controller
{
    
    public function index()
    {
        $cats = Cat::all();

        return view('back.cats.index', [
            'cats' => $cats
        ]);
    }

   
    public function create()
    {
        return view('back.cats.create', [
            
        ]);
    }

   
    public function store(StoreCatRequest $request)
    {
        //
    }

   
    public function show(Cat $cat)
    {
        //
    }

    public function edit(Cat $cat)
    {
        //
    }

    
    public function update(UpdateCatRequest $request, Cat $cat)
    {
        //
    }

   
    public function destroy(Cat $cat)
    {
        //
    }
}