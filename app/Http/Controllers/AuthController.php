<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterFormRequest;

class AuthController extends Controller
{
	public function signUp(RegisterFormRequest $request)
	{
		User::create([
			'username'  => $request->json('username'),
			'email'     => $request->json('email'),
			'password'  => bcrypt($request->json('email')),
			
		]);
	}
	
}
