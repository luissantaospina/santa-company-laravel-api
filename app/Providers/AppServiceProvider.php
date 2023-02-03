<?php

namespace App\Providers;

use App\Http\Repositories\Client\ClientRepository;
use App\Http\Repositories\Client\Impl\ClientRepositoryImpl;
use App\Http\Repositories\Order\Impl\OrderRepositoryImpl;
use App\Http\Repositories\Order\OrderRepository;
use App\Http\Repositories\Permission\Impl\PermissionRepositoryImpl;
use App\Http\Repositories\Permission\PermissionRepository;
use App\Http\Repositories\Product\Impl\ProductRepositoryImpl;
use App\Http\Repositories\Product\ProductRepository;
use App\Http\Repositories\Role\Impl\RoleRepositoryImpl;
use App\Http\Repositories\Role\RoleRepository;
use App\Http\Repositories\User\Impl\UserRepositoryImpl;
use App\Http\Repositories\User\UserRepository;
use App\Http\Services\Client\ClientService;
use App\Http\Services\Client\Impl\ClientServiceImpl;
use App\Http\Services\Order\Impl\OrderServiceImpl;
use App\Http\Services\Order\OrderService;
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
        $this->app->bind(ClientService::class, ClientServiceImpl::class);
        $this->app->bind(ClientRepository::class, ClientRepositoryImpl::class);
        $this->app->bind(PermissionRepository::class, PermissionRepositoryImpl::class);
        $this->app->bind(OrderService::class, OrderServiceImpl::class);
        $this->app->bind(OrderRepository::class, OrderRepositoryImpl::class);
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
