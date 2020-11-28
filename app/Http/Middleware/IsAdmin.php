<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $user=  User::where(['email'=>$request->email])->first();
        // $request->session()->put('user', $user);
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
    
        return redirect('/')->with('error',"You don't have admin access.");    }
}