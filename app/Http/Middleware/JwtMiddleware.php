<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class JwtMiddleware
{
    public function handle($request, Closure $next)
    {
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (TokenExpiredException) {
            return response()->json(['error' => 'su token ha expirado'], 401);
        } catch (TokenInvalidException) {
            return response()->json(['error' => 'su token es invalido'], 401);
        } catch (JWTException) {
            return response()->json(['error' => 'no cuenta con un token'], 401);
        } catch (Exception $e) {
            return response()->json(['error' => $e], 401);
        }
        return $next($request);
    }
}
