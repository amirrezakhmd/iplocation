<?php

namespace Amirjeyz\Iplocation;

use Illuminate\Support\ServiceProvider;

class IplocationServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('iplocation', function() {
            return new Iplocation();
        });
    }
}
