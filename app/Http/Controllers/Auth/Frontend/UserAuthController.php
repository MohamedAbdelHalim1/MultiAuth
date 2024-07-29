<?php

namespace App\Http\Controllers\Auth\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Authentication\Frontend\register;
use App\Services\Authentication\Frontend\login;
use App\Http\Requests\Frontend\UserRegisterRequest;
use App\Http\Requests\Frontend\UserLoginRequest;

class UserAuthController extends Controller
{

    protected $registerService;
    protected $userLoginService;

    public function __construct(register $registerService , login $userLoginService)
    {
        $this->registerService = $registerService;  
        $this->userLoginService = $userLoginService;
    }

    public function showRegisterForm()
    {
        return view('auth.frontend.user-register');
    }

    public function register(UserRegisterRequest $request)
    {
        $this->registerService->user_register($request);

        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('auth.frontend.user-login');
    }

    public function login(UserLoginRequest $request)
    {
        $isAuthenticated = $this->userLoginService->user_login($request);
        if ($isAuthenticated) {
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    }

}