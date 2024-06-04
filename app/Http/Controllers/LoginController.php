<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function register(){
        return view('register');
    }

    public function signup(Request $request) {
        // dd($request);
        // $request->validate([
        //     'username' => 'required|unique:user',
        //     'name' => 'required',
        //     'password' => 'required',
        // ]);

        User::create([
            'username'=> $request->username,
            'name'=> $request->nama,
            'password' =>Hash::make($request->password),
            'level'=>0
        ]);

        return view('login');
    }
}
