<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [FormController::class, 'index']);

Route::post('/', [FormController::class, 'index']);

Route::post('/confirm', [FormController::class, 'confirm']);

Route::post('/confirm/button', [FormController::class, 'button']);

Route::post('/confirm/store', [FormController::class, 'store']);

Route::get('/thanks', [FormController::class, 'thanks']);

Route::get('/admin', [AuthController::class, 'admin']);


