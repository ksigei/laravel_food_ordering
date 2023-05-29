<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Order;
use App\Models\OrderItem;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        // Retrieve all restaurants
        $restaurants = Restaurant::all();

        // Return the view with the restaurants data
        return view('restaurants.index', compact('restaurants'));
    }

    // create
    public function create()
    {
        // Return the view to create a restaurant
        return view('restaurants.create');
    }

    // store
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        // Create a restaurant
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->phone_number = $request->phone_number;
        $restaurant->save();

        // Redirect to the restaurants index
        return redirect('/restaurants');
    }

    // edit
    public function edit(Restaurant $restaurant)
    {
        // Return the view with the restaurant data
        return view('restaurants.edit', compact('restaurant'));
    }


    // shoew

    // public function show(Restaurant $restaurant)
    // {
    //     // Return the view with the restaurant data
    //     return view('restaurants.show', compact('restaurant'));
    // }
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.show', compact('restaurant'));
    }

    // delete

    public function destroy(Restaurant $restaurant)
    {
        // Delete the restaurant
        $restaurant->delete();

        // Redirect to the restaurants index
        return redirect('/restaurants');
    }

}
