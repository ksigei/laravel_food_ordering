<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'user_id' => 'required',
            'restaurant_id' => 'required',
            // 'menu_id' => 'required',
            // 'quantity' => 'required',
            // 'price' => 'required',
            // 'date' => 'required',
        ]);

        // A new order
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->restaurant_id = $request->restaurant_id;
        // $order->menu_id = $request->menu_id;
        $order->date = $request->date;
        $order->save();

        // A new order item
        $orderItem = new OrderItem();
        $orderItem->order_id = $order->id;
        $orderItem->menu_id = $request->menu_id;
        $orderItem->quantity = $request->quantity;
        $orderItem->price = $request->price;
        $orderItem->save();

        return redirect('/orders');
    }
}

