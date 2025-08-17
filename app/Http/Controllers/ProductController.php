<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::with('images')->get();
    return view('products.index', compact('products'));
}

public function newArrivals()
{
    // Fetch latest 8 products
    $newArrivals = Product::with('mainImage') // eager load main image
                          ->orderBy('created_at', 'desc')
                          ->take(8)
                          ->get();

    return view('welcome', compact('newArrivals'));
}
public function show(Product $product)
{
    return view('products.show', compact('product'));
}

}
