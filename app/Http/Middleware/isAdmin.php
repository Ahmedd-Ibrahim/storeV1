<?php

namespace App\Http\Middleware;

use App\User as AppUser;
use Closure;
use Illuminate\Foundation\Auth\User;

use Illuminate\Support\Facades\Auth;

class isAdmin
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
        // Auth::user()->name == 'zezo'
if (Auth::check()){
    $user = Auth::user();
$user_group = $user->user_group;
    if($user_group == 1){  // check admin group
        return $next($request);
    }
 else{
    return  redirect()->route('index');
}
    }
    return  redirect()->route('index');
}
}
