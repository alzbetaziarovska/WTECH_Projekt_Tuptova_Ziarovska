<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use \Illuminate\Http\RedirectResponse;

class CartController extends Controller
{
    public function addProduct(Request $request): \Illuminate\Http\RedirectResponse
    {
        $productID = $request->input('product_id');
        $quantity = $request->input('quantity');

        if (Auth::check())
        {
            $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
            $cartItem = CartItem::where('cart_id', $cart->id)->where('product_id', $productID)->first();

            // Already in cart, adding more
            if ($cartItem) $cartItem->increment('quantity', $quantity);

            // New to cart
            else CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productID,
                'quantity' => $quantity,
            ]);
            return redirect()->back(); // fuck session if logged in
        }

        // For users not logged in
        $cart = Session::get('shopping_cart', []);
        $productCartIndex = array_search($productID, array_column($cart, 'product_id'));

        if ($productCartIndex === false) {
            $cart[] = ['product_id' => $productID, 'quantity' => $quantity];
        } else {
            $cart[$productCartIndex]['quantity'] += $quantity;
        }
        Session::put('shopping_cart', $cart);
        return redirect()->back();
    }

    public function setProduct(Request $request): \Illuminate\Http\RedirectResponse
    {
        $productID = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Check if the user is logged in
        if (Auth::check())
        {
            // Retrieve or create the cart for the authenticated user
            $cart = Cart::firstOrCreate(['user_id' => Auth::id()]); // Ensures the cart is available for the user

            // Find the cart item for the product in the user's cart
            $cartItem = CartItem::where('cart_id', $cart->id)->where('product_id', $productID)->first();

            // If the product is already in the cart, update the quantity
            if ($cartItem) {
                $cartItem->update(['quantity' => $quantity]); // Update the quantity of the existing cart item
            }
            // If the product is not in the cart, create a new cart item
            else {
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $productID,
                    'quantity' => $quantity,
                ]);
            }

            // Redirect back to the previous page
            return redirect()->back();
        }

        // If the user is not logged in, handle the session-based cart
        $cart = Session::get('shopping_cart', []);
        $productCartIndex = array_search($productID, array_column($cart, 'product_id'));

        // If the product is not in the session cart, add it
        if ($productCartIndex === false) {
            $cart[] = ['product_id' => $productID, 'quantity' => $quantity];
        }
        // If the product is already in the session cart, update the quantity
        else {
            $cart[$productCartIndex]['quantity'] = $quantity;
        }

        // Save the updated cart to the session
        Session::put('shopping_cart', $cart);

        // Redirect back to the previous page
        return redirect()->back();
    }


    public function removeProduct(Request $request)
    {
        $productID = $request->input('product_id');

        if (Auth::check())
        {
            // Retrieve the cart of the authenticated user
            $cart = Cart::where('user_id', Auth::id())->first(); // Use first() to get the actual cart object

            // If the cart exists, delete the cart item
            if ($cart) {
                CartItem::where('cart_id', $cart->id)->where('product_id', $productID)->delete();
            }
        }

        // Handle the session-based cart for users who are not logged in
        $cart = Session::get('shopping_cart', []);
        
        // Find the product by its index and remove it from the session cart
        foreach ($cart as $key => $item) {
            if ($item['product_id'] == $productID) {
                unset($cart[$key]);
                break;
            }
        }

        // Save the updated cart to the session
        Session::put('shopping_cart', $cart);

        // Redirect back to the previous page
        return redirect()->back();
    }


    public function productsInCart()
    {
        if (Auth::check())
        {
            $cart = Cart::where('user_id', Auth::id())->first();
            return CartItem::with('product')->where('cart_id', $cart->id)->get();
        }
        $cart = Session::get('shopping_cart', []);
        $productsInCart = collect();
        foreach ($cart as $cartItem) {
            $product = Product::find($cartItem['product_id']);
            $productsInCart->push((object)[
                'product' => $product,
                'quantity' => $cartItem['quantity'],
                'product_id' => $cartItem['product_id']
            ]);
        }
        return $productsInCart;
    }

    public function productsCount()
    {
    if (Auth::check()) {
        // Automatically create a cart if it doesn't exist
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        return CartItem::where('cart_id', $cart->id)->count();
    }

    // For guest users using session-based cart
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

        foreach ($productsInCart as $cartItem) {
            $totalPrice += $cartItem->quantity * $cartItem->product->price;
        }

        return round($totalPrice, 2);
    }
}