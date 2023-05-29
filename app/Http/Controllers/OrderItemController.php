<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\Menu;

use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        // Retrieve all order items
        $orderItems = OrderItem::all();

        // Return the view with the order items data
        return view('order_items.index', compact('orderItems'));
    }


    // create
    // public function create(Request $request)
    // {
    //     // Retrieve the order id from the request
    //     $orderId = $request->order_id;

    //     // Retrieve all menus
    //     $menus = Menu::all();

    //     // Return the view to create an order item
    //     return view('order_items.create', compact('orderId', 'menus'));
    // }
    // Controller code
  // Controller code

    public function create(Request $request)
    {
        // Retrieve the order id from the request
        $orderId = $request->order_id;

        // Retrieve all menus
        $menus = Menu::all();

        // Return the view to create an order item
        return view('order_items.create', compact('orderId', 'menus'));
    }


    // store
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'order_id' => 'required',
            'menu_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        // Create an order item
        $orderItem = new OrderItem();
        $orderItem->order_id = $request->order_id;
        $orderItem->menu_id = $request->menu_id;
        $orderItem->quantity = $request->quantity;
        $orderItem->price = $request->price;
        $orderItem->save();

        // Redirect to the order items index
        return redirect('/order-items');
    }

    // edit
    public function edit(OrderItem $orderItem)
    {
        // Return the view with the order item data
        return view('order_items.edit', compact('orderItem'));
    }

    // update
    public function update(Request $request, OrderItem $orderItem)
    {
        // Validate data
        $request->validate([
            'order_id' => 'required',
            'menu_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        // Update the order item
        $orderItem->order_id = $request->order_id;
        $orderItem->menu_id = $request->menu_id;
        $orderItem->quantity = $request->quantity;
        $orderItem->price = $request->price;
        $orderItem->save();

        // Redirect to the order items index
        return redirect('/order-items');
    }

    // destroy
    public function destroy(OrderItem $orderItem)
    {
        // Delete the order item
        $orderItem->delete();

        // Redirect to the order items index
        return redirect('/order-items');
    }

    // show
    public function show(OrderItem $orderItem)
    {
        // Return the view with the order item data
        return view('order_items.show', compact('orderItem'));
    }



}
