<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Administrator
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

        if($request->isMethod('get')) {
            return abort('404');
        }

        if(Session::get('username') && Session::get('password')) {

            $username = Session::get('username');
            $password = Session::get('password');

            $users = [
                'username' => $username,
                'password' => $password
            ];

            if(Auth::attempt($users)) {
                return $next($request);
            } else {
                return abort('404');
            }

        } else {
            return abort('404');
        }

    }
}
