<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = Auth::user();

        // Check if the authenticated user is an admin
        if ($user && $user->role == 'admin') {
            return $next($request); // Allow access if admin
        }

        // Redirect if not admin
        return redirect()->route('home')->with('error', 'Access denied.');
    }
}
