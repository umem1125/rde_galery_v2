<?php

namespace App\Http\Controllers;

use App\Models\Product;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }
}
