<?php

namespace App\Http\Controllers;

// use App\Models\Service;
use App\Models\Cat;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\UploadedFile;

class ServiceController extends Controller
{
    
    public function index()
    {
        $services = Service::all();
        return view('back.services.index', [  
            'services' => $services
        ]);
    }

    
    public function create()
    {
        $cats = Cat::all();
        return view('back.services.create', [  
            'cats' => $cats
        ]);
    }

    public function colors(Request $request)
    {

        $colorsCount = Cat::where('id', $request->cat)->first()->colors_count;

        $html = view('back.servicies.colors')
        ->with(['colorsCount' => $colorsCount])
        ->render();

        return response()->json([
            'html' => $html,
            'message' => 'OK',
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
        $id = service::create([
            'title' => $request->title,
            'price' => $request->price,
            'cat_id' =>$request->cat_id
        ])->id;

        foreach ( $request->color as $index => $color) {
            Color::create([
                'title' => $request->name[$index],
                'hex' => $color,
                'product_id' => $id
            ]);
        }

        return redirect()->route('servicies-index');
    }
    
    public function show(service $service)
    {
        //
    }

   
    public function edit(service $service)
    {
        $cats = Cat::all();
        
        return view('back.servicies.edit', [
            'service' => $service,
            'cats' => $cats
        ]);
    }

  
    public function update(Request $request, service $service)
    {
        $service->update([
            'title' => $request->title,
            'price' => $request->price,
            'cat_id' =>$request->cat_id
        ]);

        $service->color()->delete();

        foreach ($request->color as $index => $color) {
            Color::create([
                'title' => $request->name[$index],
                'hex' => $color,
                'product_id' => $service->id
            ]);
        }

        return redirect()->route('servicies-index');
    }

   
    public function destroy(service $service)
    {
        $service->delete();
        return redirect()->route('servicies-index');
    }
}