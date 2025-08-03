<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthLoginController;

Route::get('/login', [AuthLoginController::class, 'index'])->name('login');
Route::post('/login-user', [AuthLoginController::class, 'userLogin'])->name('doLogin');
Route::get('/logout', [AuthLoginController::class, 'logout'])->name('logout');