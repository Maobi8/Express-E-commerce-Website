<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Add product to cart
    public function add($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1,
                "image" => $product->images->first()->image_path ?? null,
                "description" => $product->description,  // added description here
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', "{$product->name} added to cart!");
    }

    // Show cart page
    public function index()
    {
        $cart = session('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Remove item from cart
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Item removed from cart');
        }

        return redirect()->back()->with('error', 'Item not found in cart');
    }

    // Update cart quantities
    public function update(Request $request)
{
    $quantities = $request->input('quantities', []);
    $cart = session()->get('cart', []);

    foreach ($quantities as $id => $qty) {
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, intval($qty));
        }
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Cart updated successfully!');
}
}
