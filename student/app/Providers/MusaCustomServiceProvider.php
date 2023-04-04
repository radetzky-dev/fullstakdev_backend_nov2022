<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\MusaOne;

class MusaCustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Library\Services\MusaOne', function ($app) {
            return new MusaOne('MusaCorporate');
          });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
