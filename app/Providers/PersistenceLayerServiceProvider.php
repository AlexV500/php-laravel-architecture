<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PersistenceLayerServiceProvider extends ServiceProvider
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
            \App\DomainLayer\RepositoriesContracts\IUserRepository::class, 
            \App\PersistenceLayer\Repositories\UserRepository::class
        );
    }
}
