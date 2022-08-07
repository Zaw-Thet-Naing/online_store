<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class SessionCartController extends Controller
{
    function addSessionCart($item_id) {
        $item = Item::findOrFail($item_id);
        $cart = session()->get("cart");
        $cart[$item_id] = array(
            "id" => $item->id,
            "name" => $item->name,
            "price" => $item->price
        );
        session()->put("cart", $cart);
        return redirect("/");
    }

    function cart() {
        return view("cart");
    }
}
