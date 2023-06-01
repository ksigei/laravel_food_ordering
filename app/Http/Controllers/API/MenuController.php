<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// models
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return response()->json($menus);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->save();
        return response()->json($menu);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show
        $menu = Menu::find($id);
        return response()->json($menu);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update
        $menu = Menu::find($id);
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->save();
        return response()->json($menu);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete
        $menu = Menu::find($id);
        $menu->delete();
        return response()->json($menu);

    }
}
