<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CenteralFacades\Centeral;

class CenteralServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('centeral',function(){
            return new Centeral;

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
