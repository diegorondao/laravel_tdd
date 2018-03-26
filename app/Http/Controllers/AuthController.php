<?php

namespace laravel_tdd\Http\Controllers;

use Illuminate\Http\Request;
use laravel_tdd\Domains\Usuarios\Entity as Usuarios;
use laravel_tdd\Http\Requests;
use laravel_tdd\Http\Controllers\Controller;
use JWTAuth;

class AuthController extends Controller
{
	public function authenticate(Request $request)
	{
    	// Get only email and password from request
      	$credentials = $request->only('email', 'externo_id');
	    
	    // Get user by email
	    $usuarios = Usuarios::where('email', $credentials['email'])->first();
		
		// Generate Token
		try {
			
			if (!$token = JWTAuth::fromUser($usuarios)) {
				return response()->json(['error' => 'invalid_credentials'], 401);
			}
		} catch (JWTException $e) {
			return response()->json(['error' => 'could_not_create_token'], 500);
		}

		// Get expiration time
		$objectToken = JWTAuth::setToken($token);
		$expiration = JWTAuth::decode($objectToken->getToken())->get('exp');

		return response()->json([
			'access_token' => $token,
			'token_type' => 'bearer',
			'expires_in' => $expiration,
			]);
	}
}
