<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function __invoke()
    {
        return view('auth.login');
    }


    public function authenticate(LoginRequest $request)
    {
        
    }
}
