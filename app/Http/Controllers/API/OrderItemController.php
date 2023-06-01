<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// models
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // order items
        $orderItems = OrderItem::all();
        return response()->json($orderItems);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store order item
        $orderItem = new OrderItem();
        $orderItem->order_id = $request->order_id;
        $orderItem->menu_id = $request->menu_id;
        $orderItem->quantity = $request->quantity;
        $orderItem->save();
        return response()->json($orderItem);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show
        $orderItem = OrderItem::find($id);
        return response()->json($orderItem);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update
        $orderItem = OrderItem::find($id);
        $orderItem->order_id = $request->order_id;
        $orderItem->menu_id = $request->menu_id;
        $orderItem->quantity = $request->quantity;
        $orderItem->save();
        return response()->json($orderItem);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // destroy
        $orderItem = OrderItem::find($id);
        $orderItem->delete();
        return response()->json($orderItem);
        
    }
}
