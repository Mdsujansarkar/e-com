<?php

use App\Http\Controllers\Api\V1\Admin\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'v1'], function(){
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category', [CategoryController::class, 'store']);
    Route::get('/category/{id}', [CategoryController::class, 'getView']);
    Route::patch('/category/{id}', [CategoryController::class, 'update']);
    Route::delete('category/{id}', [CategoryController::class, 'destroy']);
});
