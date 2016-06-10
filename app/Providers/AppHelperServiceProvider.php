<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class AppHelperServiceProvider extends ServiceProvider
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
        $this->app->bind('Helper', function()
        {
            return new \App\Helpers\General;
        });
    }
}
