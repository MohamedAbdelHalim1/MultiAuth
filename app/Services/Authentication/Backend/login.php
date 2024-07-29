<?php

namespace App\Services\Authentication\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login
{
    public function staff_login(Request $request):bool{
        $credentials = $request->only('email', 'password');
        return Auth::guard('staff')->attempt($credentials);
    }

}
