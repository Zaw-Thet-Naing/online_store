<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PageController extends Controller
{
    public function landing() {
        $categories = Category::all();
        // compact("categories") = ["categories" => $categories]
        return view("welcome", compact("categories"));
    }
}