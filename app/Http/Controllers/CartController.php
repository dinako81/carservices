<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Cart;

class CartController extends Controller
{
    public function add(Request $request)
    {

        $id = (int) $request->id;
        $count = (int) $request->count;
        $cart = $request->session()->get('cart', []);
        // jeigu preke neekzistuoja tada kuriama nauja
        if (!isset($cart[$id])) {
            $cart[$id] = $count;
        } else {
            $cart[$id] += $count;
        }
        // else prie ekzistuojancios pridedam dar tokia pat. Isesija nedadam kainos, nes ji gali kisti. Kai reikes skaiciupti kaina, eisin i DB pasiimsim visas prekes ir suskaiciuosim kaina 
        $request->session()->put('cart', $cart);

        $Cart = new Cart($cart);
        // nauja entities, kuriame nurodem skaiciavima
        
        return response()->json([
            'count' => count($cart),
            'total' => $Cart->total()
        ]);
    }

    public function miniCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $Cart = new Cart($cart);
        return response()->json([
            'count' => count($cart),
            'total' => $Cart->total()
        ]);
    }

    
}