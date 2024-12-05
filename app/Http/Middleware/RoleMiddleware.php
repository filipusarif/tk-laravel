<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect('/login'); // Redirect ke login jika belum login
        }

        $user = Auth::user();
        // dd($user);
        if (!in_array($user->role, $roles)) {
            abort(403, 'Akses ditolak'); // Tampilkan pesan error jika akses ditolak
        }

        return $next($request);
    }
}
