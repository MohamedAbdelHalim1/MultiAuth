<?php

namespace App\Services\Authentication\Frontend;
use App\Models\User;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class register
{
    public function user_register(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::guard('web')->login($user);
    }

}
