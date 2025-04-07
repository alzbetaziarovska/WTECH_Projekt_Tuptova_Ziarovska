<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Najprv sa prihláste.');
        }
        return $user->is_admin ? view('admin_profile')->with('user', $user) : view('profile')->with('user', $user);
    }

    public function create()
    {
        return view('homepage');
    }

    public function store(Request $request)
    {
        $request->validate([
            'f_name' => 'required|string|max:512',
            'l_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => false,
            'newsletter' => $request->has('newsletter') ? true : false,
        ]);

        // Vytvorenie košíka v databáze
        DB::table('carts')->insert(['user_id' => $user->id]);

        // Prihlásenie používateľa
        auth()->login($user);

        // Presun session košíka do databázy
        $sessionCart = session('cart', []);
        foreach ($sessionCart as $productId => $item) {
            DB::table('products_in_cart')->updateOrInsert(
                ['cart_id' => $user->cart->id, 'product_id' => $productId],
                ['pcs' => $item['quantity']]
            );
        }
        session()->forget('cart'); // Vyprázdni session

        return redirect()->route('profile.index')->with('success', 'Registrácia bola úspešná!');
    }

    public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('homepage')->with('error', 'Používateľ neexistuje.');
        }
        return $user->is_admin ? view('admin_profile')->with('user', $user) : view('profile')->with('user', $user);
    }

    public function showLoginForm()
    {
        return view('homepage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Presmerovanie podľa is_admin
            if (Auth::user()->is_admin) {
                return redirect()->route('admin_profile.index')->with('success', 'Prihlásenie bolo úspešné!');
            }
            return redirect()->route('profile.index')->with('success', 'Prihlásenie bolo úspešné!');
        }

        return redirect()->back()->withErrors(['email' => 'Nesprávny e-mail alebo heslo.'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Boli ste odhlásení.');
    }

    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}