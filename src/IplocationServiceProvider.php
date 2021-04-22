<?php

namespace Amirjeyz\Iplocation;

use Illuminate\Support\ServiceProvider;

class IplocationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/iplocation.php' => config_path('iplocation.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton('iplocation', function() {
            return new Iplocation();
        });
    }
}
