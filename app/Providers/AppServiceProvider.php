<?php

namespace App\Providers;

use App\Http\Repositories\Product\Impl\ProductRepositoryImpl;
use App\Http\Repositories\Product\ProductRepository;
use App\Http\Repositories\Role\Impl\RoleRepositoryImpl;
use App\Http\Repositories\Role\RoleRepository;
use App\Http\Repositories\User\Impl\UserRepositoryImpl;
use App\Http\Repositories\User\UserRepository;
use App\Http\Services\Product\Impl\ProductServiceImpl;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Role\Impl\RoleServiceImpl;
use App\Http\Services\Role\RoleService;
use App\Http\Services\User\Impl\UserServiceImpl;
use App\Http\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductService::class, ProductServiceImpl::class);
        $this->app->bind(ProductRepository::class, ProductRepositoryImpl::class);
        $this->app->bind(UserService::class, UserServiceImpl::class);
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
        $this->app->bind(RoleService::class, RoleServiceImpl::class);
        $this->app->bind(RoleRepository::class, RoleRepositoryImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
