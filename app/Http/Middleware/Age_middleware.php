<?php

namespace App\Http\Middleware;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class Age_middleware
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
        $age = $request->dateNaissance;
        $year = Carbon::parse($age)->age;
        if ($year < 18){
            return back()->with(
                'error',
                'You must be at least 18 years old to access this page !!'
            );
        }
        return $next($request);
    }
}
