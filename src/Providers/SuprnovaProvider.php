<?php

namespace Krorten\Suprnova\Providers;

use Illuminate\Support\ServiceProvider;
use Krorten\Suprnova\Suprnova;

class SuprnovaProvider extends ServiceProvider
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
        $this->app->bind('Nanopool', function () {
            return new Suprnova();
        });
    }
}
