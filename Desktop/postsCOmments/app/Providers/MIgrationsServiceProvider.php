<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use function PHPUnit\Framework\directoryExists;

class MIgrationsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // running migrations from different paths
        $this->loadMigrationsFrom(app_path() . '/Domains/Comments/Database/Migrations');
        $this->loadMigrationsFrom(app_path() . '/Domains/Posts/Database/Migrations');
    }
}
