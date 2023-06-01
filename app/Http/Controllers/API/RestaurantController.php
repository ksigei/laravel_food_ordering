<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// models
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //restaurant
        $restaurants = Restaurant::all();
        return response()->json($restaurants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  store restaurant
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->save();
        return response()->json($restaurant);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show
        $restaurant = Restaurant::find($id);
        return response()->json($restaurant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update
        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->name;
        $restaurant->save();
        return response()->json($restaurant);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // destroy
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        return response()->json($restaurant);
        
    }
}
