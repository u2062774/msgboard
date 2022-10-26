<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);
Route::resource('/visitors', VisitorController::class);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/', [LogoutController::class, 'logout'])->name('logout');

