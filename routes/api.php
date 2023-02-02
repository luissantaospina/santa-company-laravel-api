<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Client\ClientController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::group(['middleware' => 'jwt.verify', 'prefix' => 'auth'], function () {
        // Users
        Route::get('users', [UserController::class, 'index']);
        Route::post('users/login', [UserController::class, 'login']);
        Route::post('users', [UserController::class, 'store']);
        Route::get('user/{id}', [UserController::class, 'show']);
        Route::delete('user/{id}', [UserController::class, 'destroy']);
        Route::put('user/{id}', [UserController::class, 'update']);

        // Products
        Route::get('products', [ProductController::class, 'index']);
        Route::post('products', [ProductController::class, 'store']);
        Route::get('product/{id}', [ProductController::class, 'show']);
        Route::delete('product/{id}', [ProductController::class, 'destroy']);
        Route::put('product/{id}', [ProductController::class, 'update']);

        // Roles
        Route::get('roles', [RoleController::class, 'index']);
        Route::post('roles', [RoleController::class, 'store']);
        Route::get('role/{id}', [RoleController::class, 'show']);
        Route::delete('role/{id}', [RoleController::class, 'destroy']);
        Route::put('role/{id}', [RoleController::class, 'update']);

        // Orders
        Route::get('orders', [OrderController::class, 'index']);
        Route::post('orders', [OrderController::class, 'store']);
        Route::get('order/{id}', [OrderController::class, 'show']);
        Route::delete('order/{id}', [OrderController::class, 'destroy']);
        Route::put('order/{id}', [OrderController::class, 'update']);

        // Clients
        Route::get('clients', [ClientController::class, 'index']);
        Route::post('clients', [ClientController::class, 'store']);
        Route::get('client/{id}', [ClientController::class, 'show']);
        Route::delete('client/{id}', [ClientController::class, 'destroy']);
        Route::put('client/{id}', [ClientController::class, 'update']);
    });

    Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
        // Auth
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
    });
});
