<?php

namespace App\Http\Controllers;

use App\Events\OrderStatus;
use App\Food;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin')->withOrders(Order::all());
    }


    public function show(Order $order)
    {
        return view('order')->withOrder($order);
    }

    public function buy(Food $food)
    {

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'food_id' => $food->id
        ]);

        return redirect(route('order', $order));

    }

    public function update(Request $request, Order $order)
    {
        $order->status = $request->status;
        $order->save();

        event(new OrderStatus($order));

        return redirect()->back();

    }

}
