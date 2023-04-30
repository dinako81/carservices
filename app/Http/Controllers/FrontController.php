<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cat;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('front.index', [
            'products' => $products
        ]);
    }

}