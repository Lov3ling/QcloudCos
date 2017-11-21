<?php

namespace Lee\QcloudCos;

use Illuminate\Support\ServiceProvider;

class QcloudCosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/config.php' => config_path('qcloud.php'),
        ]);
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('qcloudcos',function($app){
                return (new Cos(config('qcloud')))->Api();
        });
        //
    }
}
