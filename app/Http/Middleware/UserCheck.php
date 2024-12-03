<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            return $next($request); 
        }else{
            return redirect('/')->with('error','kindly login to open dashboard');
        }
        // if (Auth::check() && Auth::user()->user_type === 'admin') {
        //     return $next($request);
        // }

        // If not a vendor, redirect to login or error page
        return redirect()->route('login')->with('error', 'You must be a admin to access this page.');
       
    }
}
