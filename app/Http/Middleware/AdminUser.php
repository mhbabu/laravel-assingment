<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userType = auth()->user()->user_type;

        if ($userType != 1 && $userType != 2) {
            return redirect(route('files.index'))->with('error', 'You have no access for this route.');
        }

        return $next($request);
    }
}
