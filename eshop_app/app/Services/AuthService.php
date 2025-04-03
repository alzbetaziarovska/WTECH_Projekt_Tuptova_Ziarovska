<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthService
{
    public function register(array $data): User
    {
        $nameParts = explode(' ', $data['full_name'], 2);
        $f_name = $nameParts[0];
        $l_name = $nameParts[1] ?? '';

        return User::create([
            'f_name' => $f_name,
            'l_name' => $l_name,
            'email' => $data['email'],
            'password' => bcrypt($data['password']), // OPRAVA: Použitie bcrypt namiesto md5
            'is_admin' => false,
            'newsletter' => false,
        ]);
    }


    // Upravené na array namiesto Request

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
    
        // Nájdeme používateľa
        $user = User::where('email', $credentials['email'])->first();
    
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['email' => 'Nesprávny e-mail alebo heslo.']);
        }
    
        // Prihlásime používateľa
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'Prihlásenie úspešné!');
    }
    


    public function logout(Request $request): void
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}