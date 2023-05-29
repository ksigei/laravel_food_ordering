<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrderController;


Route::get('/', [MenuController::class, 'index']);

// resource for menus
Route::resource('menus', MenuController::class);
Route::get('/menus/{restaurant_id}', [MenuController::class, 'index']);
// Route::get('/menus/{id}', 'MenuController@show')->name('menus.show');
Route::get('/menus/create/{restaurant_id}', [MenuController::class, 'create']);
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::get('/orders/create', [OrderController::class, 'create']);

Route::post('/orders', [OrderController::class, 'store']);
// Restaurant routes
Route::resource('restaurants', RestaurantController::class);
Route::get('/restaurants/{id}', 'RestaurantController@show')->name('restaurants.show');

// OrderItem routes
Route::resource('order-items', OrderItemController::class);
// Route::get('/order-items/create/{order_id}', 'OrderItemController@create')->name('order-items.create');
// Route::post('/order-items', 'OrderItemController@store')->name('order-items.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
