<?php

namespace App\Http\Middleware;

use App\helper\Response as HelperResponse;
use App\helper\Token;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiswaAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->hasHeader('Authorization')) {
            return HelperResponse::error(message: 'Unauthorized', statusCode: 401);
        }

        $explode = explode(' ', $request->header('Authorization'));
        if (isset($explode[1])) {
            $token = Token::decode($explode[1]);
            if ($token) {
                $request->attributes->add(['token' => $token]);
                return $next($request);
            } else {
                return HelperResponse::error(message: 'Unauthorized', statusCode: 401, errors: ['ddd']);
            }
        } else {
            return HelperResponse::error(message: 'Unauthorized', statusCode: 401);
        }
    }
}
