<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class, 'index']);

Route::post('/', [FormController::class, 'index']);

Route::post('/confirm', [FormController::class, 'confirm']);

Route::post('/confirm/button', [FormController::class, 'button']);

Route::post('/confirm/store', [FormController::class, 'store']);

Route::get('/thanks', [FormController::class, 'thanks']);

Route::get('/admin', [FormController::class, 'admin']);

Route::get('/login', [FormController::class, 'login']);

Route::post('/login', [FormController::class, 'login']);

Route::post('/register', [FormController::class, 'register']);