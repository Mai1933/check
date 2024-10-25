<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FormController::class, 'index']);

Route::get('/confirm', [FormController::class, 'confirm']);

Route::get('/thanks', [FormController::class, 'thanks']);

Route::get('/admin', [FormController::class, 'admin']);

Route::get('/login', [FormController::class, 'login']);