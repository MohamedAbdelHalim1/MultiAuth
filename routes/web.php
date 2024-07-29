<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Frontend\UserAuthController;
use App\Http\Controllers\Auth\Backend\staffAuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('register', [UserAuthController::class, 'showRegisterForm'])->name('user.register');
Route::post('register', [UserAuthController::class, 'register']);
Route::get('/', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/', [UserAuthController::class, 'login']);
Route::post('user/logout', [UserAuthController::class, 'logout'])->name('user.logout');


Route::get('staff/login', [staffAuthController::class, 'showLoginForm'])->name('staff.login');
Route::post('staff/login', [staffAuthController::class, 'login']);
Route::post('staff/logout', [staffAuthController::class, 'logout'])->name('staff.logout');


// Routes for regular users (using 'web' guard)
Route::middleware('auth:web')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Routes for staff members (using 'staff' guard)
Route::middleware('auth:staff')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});