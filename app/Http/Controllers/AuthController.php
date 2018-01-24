<?php

namespace laravel_tdd\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	use App\Company;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	use JWTAuth;
	use Hash;
}
