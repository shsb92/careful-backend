<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{
    public function response($user)
    {
        $token = $user->createToken( str()->random(40) )->plainTextTokern;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'token_type'=> 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:4',
        ]);

        // if ( !Auth::attempt( $cred ) ) {
        //     return response()->json([
        //         'message' => 'Unauthorized.'
        //     ], 401);
        // }

        return $this->response( Auth::user() );
    }

    public function logout()
    {
        Auth::users()->tokens()->delete();

        return response()->json([
            'message' => 'You have successfully logged out and the token was deleted.'
        ]);
    }
}
