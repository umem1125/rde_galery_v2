<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimony;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }

    public function home()
    {
        $products = Product::all();
        $testimonies = Testimony::all();

        return view('home', [
            'products' => $products,
            'testimonies' => $testimonies,
        ]);
    }
    public function home_new()
    {
        $products = Product::all();
        $testimonies = Testimony::all();

        return view('home2', [
            'products' => $products,
            'testimonies' => $testimonies,
        ]);
    }
}
