<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;

class OrderController extends Controller
{
    function buyNowCheckOutForm($item_id) {
        $item = Item::findOrFail($item_id);
        return view("check-out", compact("item"));
    }

    function buyNowCheckOut(Request $request, $item_id) {
        $item = Item::findOrFail($item_id);
        $order = new Order();
        $order->total_amount = $request->qty * $item->price;
        $order->remark = $request->remark;
        $order->save();

        $order_detail = new OrderDetail();
        $order_detail->item_id = $item_id;
        $order_detail->order_id = $order->id;
        $order_detail->quantity = $request->qty;
        $order_detail->price = $item->price;
        $order_detail->sub_total = $request->qty * $item->price;
        $order_detail->save();

        return view("order-complete");
    }

    function sessionOrderCheckout(Request $request) {
        $sub_totals = 0;
        foreach(session()->get("cart") as $key => $value) {
            $sub_totals += $request->qty * session()->get("cart")[$key]["price"];
        }
        $order = new Order();
        $order->total_amount = $sub_totals;
        $order->remark = $request->remark;
        $order->save();
        return view("order-complete");
    }
}
