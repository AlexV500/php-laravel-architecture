<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DomainLayerServiceProvider extends ServiceProvider
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
        $this->app->bind(
            \App\DomainLayer\DomainServices\IUserManagementService::class, 
            \App\DomainLayer\DomainServices\UserManagementService::class
        );
    }
}
