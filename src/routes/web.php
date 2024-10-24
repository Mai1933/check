<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FormController::class, 'index']);

Route::get('/confirm', [FormController::class, 'confirm']);
