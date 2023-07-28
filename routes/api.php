<?php

use App\Http\Controllers\Api\v1\Admin\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'v1'], function(){
    Route::get('/category', [CategoryController::class, 'index']);
});
