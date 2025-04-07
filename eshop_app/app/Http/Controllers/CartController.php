<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $cartCount = CartItem::where('user_id', auth()->id())->count();
        return view('shopping_cart1', compact('cart'), ['cartCount' => $cartCount]);
    }

    /* public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        // Načítanie produktu z databázy
        $product = Product::findOrFail($productId);

        $cart = session('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
            ];
        }

        session(['cart' => $cart]);
        return redirect()->route('cart.index')->with('success', 'Produkt pridaný do košíka!');
    } */


    public function addToCart(Request $request)
    {

        $productId = $request->input('product_id');
        $quantity = (int) $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        // If product already in cart, update quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity' => $quantity,
            ];
        }

        CartItem::create([
            'user_id' => auth()->id(),
            'product_id' => $productId,
            'quantity' => $quantity,
        ]);

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }
    

    public function getCartByUser($userId)
    {
        $cart = Cart::where('user_id', $userId)->get();
        $products = CartItem::where('cart_id', $cart->id)->with('product')->get();
        return view('shopping_cart1', compact('products'));
    }
    
}
