<?php

namespace App\Http\Middleware;

use Closure;
use App\users;
use Illuminate\Support\Facades\Auth;
class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
             $users = Auth::users();
            // if($users)
            return $next($request);
        }
        else
            return redirect('admin/login');
        
    }
}
