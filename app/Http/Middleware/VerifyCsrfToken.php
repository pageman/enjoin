<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
class VerifyCsrfToken extends BaseVerifier {
    /**
     * Exclude route from CSRF check
     * @var array
     */
    protected $excludeRoutes = [
        'messages/create'
        // add any route to exclude here
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach($this->excludeRoutes as $route) {
            if ($request->is($route)) {
                return $next($request);
            }
        }
        return parent::handle($request, $next);
    }
}