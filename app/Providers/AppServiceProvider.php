<?php

namespace App\Providers;

use Braintree\Gateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function ($app) {

            return new Gateway([

                'environment' => 'sandbox',
                'merchantId' => 'tbkvpxtz3gvbwpwz',
                'publicKey' => 'ksmvh9nm4p8bc6w5',
                'privateKey' => '7800dca0c9eddf9bd0ea1caafe509b88'
            ]);
        });
    }
}
