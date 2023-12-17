<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login() {
        return view('login');
    }

    public function registration() {
        return view('registration');
    }

    public function doLogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('todos.index')->with('success', 'Authenticated successfully');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function doRegister(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'unique:users'
        ]);
        if ($validator->fails()) {
            return redirect()->route('todos.index')->withErrors($validator);
        }

        User::create([
            'name' => $request->get('email'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        return redirect()->route('todos.index');
    }
}
