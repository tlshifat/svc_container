<?php

namespace App\Providers;

use App\Billing\CreditCardPaymentGateway;
use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayInterface;
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
        $this->app->singleton(PaymentGatewayInterface::class,function ($app){
            //return new PaymentGateway("euro");
            if(request()->has("credit")){
                return new CreditCardPaymentGateway("euro");
            }
            return new PaymentGateway("euro");
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
