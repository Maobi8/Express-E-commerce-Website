<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class WishlistController extends Controller
{
     public function index()
    {
        $wishlist = session('wishlist', []);
        return view('wishlist.index', compact('wishlist'));
    }

    public function add($id)
    {
        $product = Product::findOrFail($id);

        $wishlist = session()->get('wishlist', []);

        if(!isset($wishlist[$id])) {
            $wishlist[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "image" => $product->images->first()->image_path ?? null,
            ];

            session()->put('wishlist', $wishlist);

            return redirect()->back()->with('success', "{$product->name} added to wishlist!");
        }

        return redirect()->back()->with('info', "{$product->name} is already in your wishlist.");
    }

    public function remove($id)
    {
        $wishlist = session()->get('wishlist', []);

        if(isset($wishlist[$id])) {
            unset($wishlist[$id]);
            session()->put('wishlist', $wishlist);
            return redirect()->back()->with('success', 'Product removed from wishlist.');
        }

        return redirect()->back()->with('info', 'Product not found in wishlist.');
    }
}
