<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [HomeController::class, 'createCategory']);
