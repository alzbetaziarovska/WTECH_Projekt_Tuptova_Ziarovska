<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    // Registrácia
    public function showRegisterForm()
    {
        return view('auth-popup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:512',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5',
        ]);

        $this->authService->register($request->only(['full_name', 'email', 'password']));

        return redirect('/')->with('success', 'Registrácia úspešná! Prihláste sa.');
    }

    // Prihlásenie
    public function showLoginForm()
    {
        return view('auth-popup');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($this->authService->login($request)) {
            $request->session()->regenerate();
            return redirect('/profile')->with('success', 'Prihlásenie úspešné!');
        }
    
        return back()->withErrors(['email' => 'Nesprávny e-mail alebo heslo.']);
    }
    

    // Odhlásenie
    public function logout(Request $request)
    {
        $this->authService->logout(); // Odhlásenie cez AuthService
        return redirect('/')->with('success', 'Odhlásenie úspešné!');
    }
}
