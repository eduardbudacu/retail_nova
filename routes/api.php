<?php

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * POST orders
 * 
 */
Route::post('/orders', function(Request $request) {
    $order = new Order();
    $order->user_id = $request->json('user_id');
    $order->date = Carbon::now();
    $order->economic_day_id = 1;
    $order->pos_id = 1;
    $order->save();
    return $order;
});

Route::post('/orders/{order}/items', function(Order $order, Request $request) {
    $product = Product::findOrfail($request->json('product_id'));
    $orderItem = new OrderItem();
    $orderItem->order_id = $order->id;
    $orderItem->product_id = $product->id;
    $orderItem->quantity = $request->json("quantity");
    $orderItem->value =  $product->price * $orderItem->quantity;
    $orderItem->discount = $request->json("discount");
    $orderItem->save();
    return $orderItem;
});

Route::get('/orders/{order}/items', function(Order $order) {
    return $order->items;
});