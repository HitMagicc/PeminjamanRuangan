<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            $user = Auth::user();
            // dd($user);
            $roles = $user->level;
            switch ($roles) {
                case (0):
                    return redirect()->intended(route('dashboard.index'));
                    break;
                case (1):
                    return redirect()->intended(route('admin.dashboard.index'));
                    break;
                default:
                    return redirect()->back()->with('error', 'Role malfunction');
                    break;
            }

        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
        
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('index.login'));
    }
}
