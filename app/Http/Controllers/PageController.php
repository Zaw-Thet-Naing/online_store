<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PageController extends Controller
{
    public function landing() {
        $items = Item::all();
        // compact("categories") = ["categories" => $categories]
        return view("welcome", compact("items"));
    }
}