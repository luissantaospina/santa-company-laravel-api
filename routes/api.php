<?php

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::post('products', [ProductController::class, 'store']);
    Route::get('product/{id}', [ProductController::class, 'show']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);
    Route::put('product/{id}', [ProductController::class, 'update']);
    Route::get('users', [UserController::class, 'index']);
    Route::post('users', [UserController::class, 'login']);
    Route::get('roles', [RoleController::class, 'index']);
    Route::get('clients', [ClientController::class, 'index']);
});
