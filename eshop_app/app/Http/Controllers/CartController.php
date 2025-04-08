<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductInCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use \Illuminate\Http\RedirectResponse;

class CartController extends Controller
{
    public function addProduct(Request $request): \Illuminate\Http\RedirectResponse
    {
        $productID = $request->input('product_id');
        $pcs = $request->input('pcs');

        if (Auth::check())
        {
            $cart = Cart::where('user_id', Auth::id());
            $productInCart = ProductInCart::where('cart_id', $cart->id)->where('product_id', $productID)->first();

            // Already in cart, adding more
            if ($productInCart) $productInCart->increment('quantity', $pcs);

            // New to cart
            else ProductInCart::create([
                'cart_id' => $cart->id,
                'product_id' => $productID,
                'quantity' => $pcs,
            ]);
            return redirect()->back(); // fuck session if logged in
        }

        // For users not logged in
        $cart = Session::get('shopping_cart', []);
        $productCartIndex = array_search($productID, array_column($cart, 'product_id'));

        if ($productCartIndex === false) {
            $cart[] = ['product_id' => $productID, 'pcs' => $pcs];
        } else {
            $cart[$productCartIndex]['pcs'] += $pcs;
        }
        Session::put('shopping_cart', $cart);
        return redirect()->back();
    }

    public function setProduct(Request $request): \Illuminate\Http\RedirectResponse
    {
        $productID = $request->input('product_id');
        $pcs = $request->input('pcs');

        if (Auth::check())
        {
            $cart = Cart::where('user_id', Auth::id());
            $productInCart = ProductInCart::where('cart_id', $cart->id)->where('product_id', $productID)->first();

            // Already in cart, adding more
            if ($productInCart) $productInCart->update('quantity', $pcs);

            // New to cart
            else ProductInCart::create([
                'cart_id' => $cart->id,
                'product_id' => $productID,
                'quantity' => $pcs,
            ]);
            return redirect()->back(); // fuck session if logged in
        }

        // For users not logged in
        $cart = Session::get('shopping_cart', []);
        $productCartIndex = array_search($productID, array_column($cart, 'product_id'));

        if ($productCartIndex === false) {
            $cart[] = ['product_id' => $productID, 'pcs' => $pcs];
        } else {
            $cart[$productCartIndex]['pcs'] = $pcs;
        }
        Session::put('shopping_cart', $cart);
        return redirect()->back();
    }

    public function removeProduct(Request $request)
    {
        $productID = $request->input('product_id');

        if (Auth::check())
        {
            $cart = Cart::where('user_id', Auth::id());
            ProductInCart::where('cart_id', $cart->id)->where('product_id', $productID)->delete();
        }

        $cart = Session::get('shopping_cart', []);
        unset($cart[$productID]);
        Session::put('shopping_cart', $cart);
        return redirect()->back();
    }

    public function productsInCart()
    {
        if (Auth::check())
        {
            $cart = Cart::where('user_id', Auth::id())->first();
            return ProductInCart::with('product')->where('cart_id', $cart->id)->get();
        }
        $cart = Session::get('shopping_cart', []);
        $productsInCart = collect();
        foreach ($cart as $productInCart) {
            $product = Product::find($productInCart['product_id']);
            $productsInCart->push((object)[
                'product' => $product,
                'pcs' => $productInCart['pcs'],
                'product_id' => $productInCart['product_id']
            ]);
        }
        return $productsInCart;
    }

    public function productsCount()
    {
        if (Auth::check())
        {
            $cart = Cart::where('user_id', Auth::id())->first();
            return ProductInCart::where('cart_id', $cart->id)->count();
        }
        $cart = Session::get('shopping_cart', []);
        return count($cart);
    }

    public function show()
    {
        $productsInCart = $this->productsInCart();
        return view('shopping_cart1', ['productsInCart' => $productsInCart, 'cartPrice' => $this->cartPrice()]);
    }

    public function cartPrice(): float
    {
        $productsInCart = $this->productsInCart();
        $totalPrice = 0;

        foreach ($productsInCart as $productInCart) {
            $totalPrice += $productInCart->pcs * $productInCart->product->price;
        }

        return round($totalPrice, 2);
    }
}