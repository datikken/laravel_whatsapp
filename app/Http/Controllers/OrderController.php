<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Notifications\OrderProcessed;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order([
            'name' => 'order',
            'amount' => 1
        ]);

        $order->save();
        $request->user()->notify(new OrderProcessed($order));
        dump($order);

        return redirect()->route('home')->with('status', 'Order Placed!');
    }
}
