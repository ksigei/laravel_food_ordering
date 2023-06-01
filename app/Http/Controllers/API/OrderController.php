<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// models
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store order
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->restaurant_id = $request->restaurant_id;
        $order->save();
        return response()->json($order);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show
        $order = Order::find($id);
        return response()->json($order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update
        $order = Order::find($id);
        $order->user_id = $request->user_id;
        $order->restaurant_id = $request->restaurant_id;
        $order->save();
        return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete
        $order = Order::find($id);
        $order->delete();
        return response()->json($order);

    }
}
