<?php

use App\Http\Controllers\Product\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1'], function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::post('products', [ProductController::class, 'store']);
    Route::get('product/{id}', [ProductController::class, 'show']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);
});
