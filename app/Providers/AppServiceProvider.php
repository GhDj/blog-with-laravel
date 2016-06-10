<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $c = Setting::first();
        view()->share('data', $c);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
