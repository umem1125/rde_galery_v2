<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::get();

        return view('sections.testimony', [
            'testimonies' => $testimonies,
        ]);
    }
}
