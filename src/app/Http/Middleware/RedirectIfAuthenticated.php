<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    // public function handle($request, Closure $next, $guard = null)
    // {
    //     if (Auth::guard($guard)->check()) {
    //         return redirect(RouteServiceProvider::HOME);
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::check()) {
                //ログイン中に認証前(ログイン前)の画面にURLを変更した場合には、トップページの画面にリダイレクトさせる
                return redirect()->route('main.top');
            } else {
                //ログアウト中(認証前)にログイン(認証後)後に閲覧できる画面にURLを変更した場合は、ログイン画面にリダイレクトさせる
                return redirect()->route('home.top');
            }
        }
        return $next($request);
    }
}