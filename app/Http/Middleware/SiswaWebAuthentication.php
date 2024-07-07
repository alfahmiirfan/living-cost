<?php

namespace App\Http\Middleware;

use App\helper\Token;
use App\Models\Siswa;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SiswaWebAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->hasCookie('username') && $request->hasCookie('access_token') && $request->hasCookie('refresh_token')) {
            $token = Token::decode($request->cookie('access_token'));
            if ($token && Siswa::whereKey($token->id)->exists()) {
                $request->attributes->add(['token' => $token]);
                return $next($request);
            }
        }

        return redirect('/LoginUser')->withCookies([
            Cookie::forget('username'),
            Cookie::forget('access_token'),
            Cookie::forget('refresh_token')
        ]);
    }
}
