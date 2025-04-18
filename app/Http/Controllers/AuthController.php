<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            } else {
                Auth::logout(); 
                return redirect()->route('login')->with('error', 'Access Denied! Only Admins can login.');
            }
        }
    
        return back()->with('error', 'Invalid credentials. Please try again.');
    }
}
