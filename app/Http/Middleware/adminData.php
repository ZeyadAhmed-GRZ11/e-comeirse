<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next){
        
        if (Auth::check()) {
            $user = Auth::user();
        
            if ($user->is_admin) {
                return $next($request);
            } elseif ($userId === $user->id) {
                return redirect()->back()->with('error', 'No Data');
            } else {
                return redirect()->route('home')->with('error', 'Access denied');
            }
        }
        return $next($request);
    }
}

