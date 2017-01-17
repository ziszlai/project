<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Event::listen('') // waiting for a specific event to occur
        var_dump('boot');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // This is for registering with the service container
        var_dump('hello');
    }
}
