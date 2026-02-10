<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderViewController extends Controller
{
    public function index()
    {
        $orders = Order::with('company')->get();

        return view('orders.index', compact('orders'));
    }
}
