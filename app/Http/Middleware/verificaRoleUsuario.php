<?php

namespace App\Http\Middleware;

use Closure;

class verificaRoleUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if( auth()->user()->tieneRole([$role]) ){ // poner corchetes entre la variable significa mandar un array
            return $next($request);
        }
        redirect('/');
    }
}
