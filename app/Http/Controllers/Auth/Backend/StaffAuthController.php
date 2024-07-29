<?php

namespace App\Http\Controllers\Auth\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Authentication\Backend\login;
use App\Http\Requests\Backend\StaffLoginRequest;



class StaffAuthController extends Controller
{
    protected $staffLoginService;

    public function __construct(login $staffLoginService){
        $this->staffLoginService = $staffLoginService;
    }

    public function showLoginForm()
    {
        return view('auth.backend.staff-login');
    }

    public function login(staffLoginRequest $request)
    {
        $isAuthenticated = $this->staffLoginService->staff_login($request);

        if ($isAuthenticated) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);    }

    public function logout(Request $request)
    {
        Auth::guard('staff')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.login');
    }

    
}