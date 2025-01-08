<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Role;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class RoleVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, int $role): Response
    {
        if (!$request->user() || $request->user()->role() != Role::from($role)) {                           
            throw new UnauthorizedHttpException("You are not authorized to access this page.");
        }
        return $next($request);
    }
}
