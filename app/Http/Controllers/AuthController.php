<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Http\Resources\UserRequest;

class AuthController extends Controller
{
    //
    public function signUp(SignUpRequest $request)
    {


        return UserRequest::make($request);
    }
}
