<?php

namespace App\Services\Authentication\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login
{
    public function user_login(Request $request):bool{
        $credentials = $request->only('email', 'password');
        return Auth::guard('web')->attempt($credentials);
    }

}
