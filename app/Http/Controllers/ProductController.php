<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cat;
use App\Models\Color;
use Illuminate\Http\Request;
use App\Services\ColorNamingService;

class ProductController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $cats = Cat::all();
        return view('back.products.create', [  
            'cats' => $cats
        ]);
    }

    public function colors(Request $request)
    {    
       
        $colorsCount = Cat::where('id', $request->cat)->first()->colors_count;
        // Cat::where('id', $request->cat)-neivykdyta uzklausa i duomenu baze, first ivykdo uzklausa pasiima is dees pirma elementa ir paduoda

        $html = view('back.products.colors')
        ->with(['colorsCount' => $colorsCount])
        ->render();

        // renderinimas - kintamuju i html'a idejimas
        // kintamasis aprasytas back.products.colors faile


        // perduodam html gabala kaip stringa
        
       return response()->json([
        'html' => $html,
        'message' => 'Labas',
    ]);

    }

    public function colorName(Request $request, ColorNamingService $cns)
    {
        return response()->json([
            'name' => $cns->nameIt($request->color),
            'message' => 'OK',
        ]);
    }
   
    public function store(Request $request)
    {
        
    }

    
    public function show(Product $product)
    {
        //
    }

   
    public function edit(Product $product)
    {
        //
    }

  
    public function update(Request $request, Product $product)
    {
        //
    }

   
    public function destroy(Product $product)
    {
        //
    }
}