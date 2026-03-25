<?php

namespace App\Http\Controllers;

use App\Models\ProductGrid;
use Illuminate\Http\Request;

class ProductGridController extends Controller
{
    public function index()
    {
        $productGrids = ProductGrid::all();

        return view('section.about', [
            'productGrids' => $productGrids
        ]);
    }
}
