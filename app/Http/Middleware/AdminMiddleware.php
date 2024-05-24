<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check is user login 
        $jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE3MTY1NjkxNDAsImV4cCI6MTcxNjU3Mjc0MCwibmJmIjoxNzE2NTY5MTQwLCJqdGkiOiJhb1FBbW56R1ZqNFVrUDZqIiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.CLK7CROH5CMQ66gpL964WhawpD0o38FiaL5zbFQwe3c';
        
        dd(auth()->guard('api')->attempt(['token' => $jwt]));

        if (!isset($jwt['jwt_token'])) {
            return redirect()->route('login');
        } else {
            $token = $jwt['jwt_token'];
            $user = auth()->attempt(['token' => $token]);
            if (!$user) {
                return redirect()->route('login');
            } else {
                return $next($request);
            }   
        }
    }
}
