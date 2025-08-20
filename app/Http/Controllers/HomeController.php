<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Product::take(4)->get();
        $latest = Product::latest()->take(4)->get();
        
        return view('home', compact('featured', 'latest'));
    }
}
