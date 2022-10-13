<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index']);
Route::resource('/visitors', VisitorController::class);
