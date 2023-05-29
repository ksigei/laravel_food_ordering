<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Restaurant;


class MenuController extends Controller
{
    public function index()
    {
        // Retrieve all menu items
        $menus = Menu::all();

        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => '',
            'restaurant_id' => 'required',
            'price' => 'required|numeric',
        ]);

        // Create a new menu item
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->description = $request->description;
        $menu->restaurant_id = $request->restaurant_id;
        $menu->price = $request->price;
        $menu->save();

        return redirect('/menus')->with('success', 'Menu item created successfully');
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        // Update the menu item
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->save();

        return redirect('/menus')->with('success', 'Menu item updated successfully');
    }

    public function destroy(Menu $menu)
    {
        // Delete the menu item
        $menu->delete();

        return redirect('/menus')->with('success', 'Menu item deleted successfully');
    }

        public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.show', ['menu' => $menu]);
    }

}
