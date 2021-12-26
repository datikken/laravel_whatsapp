<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = Order::factory()->count(1)->create();

        dump($order);

        return redirect()->route('home')->with('status', 'Order Placed!');
    }
}
