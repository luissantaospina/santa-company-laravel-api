<?php

namespace App\Providers;

use App\Http\Repositories\Product\Impl\ProductRepositoryImpl;
use App\Http\Repositories\Product\ProductRepository;
use App\Http\Services\Product\Impl\ProductServiceImpl;
use App\Http\Services\Product\ProductService;
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
