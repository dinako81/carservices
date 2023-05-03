<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders = Order::all();

        return view('back.orders.index', [
            'orders' => $orders,
            'status' => Order::STATUS
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(StoreOrderRequest $request)
    {
        //
    }

    
    public function show(Order $order)
    {
        //
    }

    
    public function edit(Order $order)
    {
        //
    }

   
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

 
    public function destroy(Order $order)
    {
        //
    }
}