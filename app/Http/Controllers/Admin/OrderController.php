<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    function __construct() {
        $this->middleware("auth");
    }

    function index() {
        $orders = Order::all();
        return view("Order.index", compact("orders"));
    }
}
