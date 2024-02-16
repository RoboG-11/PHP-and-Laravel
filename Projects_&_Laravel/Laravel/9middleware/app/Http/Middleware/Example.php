<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Example
{
    /**
     * Handle an incoming request.
     * 
     * NOTE: Esta función es la que se va a ejecutar para proteger una ruta o construcción de un controlador
     * NOTE: Recibe un request que son los datos de la petción y $next indica cual va a ser el siguiente
     *       valor al cual vamos a estar moviemndo el flujo del proyecto. Si todo está bien en el
     *       middleware, $next va a ayudar a mover el flujo donde corresponde.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // NOTE: Example
        // if(!Auth::user->hasRol('admin')){
        //     // mandar a login
        // }

        // return redirect()->route("no-access"); // NOTE: Es de ejemplo, no deja pasar a nadie
        return $next($request);
    }
}
