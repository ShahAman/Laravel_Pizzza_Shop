<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, Role $role, Permission $permission)
    {
        if(!$request->user()->hasRole($role)){
            abort(404);
        }

        if($permission !== null && !$request->user()->can($permission)){
            abort(404);
        }

        return $next($request);
    }
}
