<?php

namespace App\Entities;

use App\Models\Product;



class Cart{

    // sitoje klaseje mes turesime metodus kurie skaiciuoja produktu kainas, pagal pateikta krepseli. Mes duodam krepseli, o klase paskaiciuoja kaina.
    public function __construct(array $cart) 
    {
        // constructorius gave cart nukeliauja i DB ir surekta visus productus kurie isvardinti cart. Kad toliau turetumem is ko skaiciuot
        $productsId = array_keys($cart);
        $this->products = Product::whereIn('id', $productsId)->get();
        $this->products = $this->products->map(function($p) use ($cart) {
            $p->count = $cart[$p->id];
            return $p;
        });
    }


    public function total()
    {
        return $this->products->reduce(function ($carry, $item) {
            return $carry + $item->count * $item->price;
        }, 0);

        // $carry kaupiklis, kur kaupiasi suma, $items - productai, 0-prasideda nuo 0.
    }

    public function products()
    {
        return $this->products;
    }

    // kasike rodys produktus

}