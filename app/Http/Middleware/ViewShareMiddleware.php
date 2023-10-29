<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ViewShareMiddleware
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
        $_siteSetting = \App\Models\SiteSetting::first();
        view()->share('_siteSetting', $_siteSetting);

        $_socialMedia = \App\Models\SocialMedia::all();
        view()->share('_socialMedia', $_socialMedia);
        return $next($request);
    }
}
