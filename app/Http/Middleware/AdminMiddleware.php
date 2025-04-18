<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first!');
        }
    
        if (Auth::user()->role !== 'admin') {
            Auth::logout(); 
            return redirect()->route('login')->with('error', 'Access Denied! Only Admins can access the dashboard.');
        }
     
        return $next($request);
    }
}
