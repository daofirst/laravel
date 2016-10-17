<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Study\Repositories\Contracts\PostRepository::class, \App\Study\Repositories\Eloquent\PostRepositoryEloquent::class);
        $this->app->bind(\App\Study\Repositories\Contracts\PostRepository::class, \App\Study\Repositories\Eloquent\PostRepositoryEloquent::class);
        //:end-bindings:
    }
}
