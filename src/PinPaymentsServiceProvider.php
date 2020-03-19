<?php

namespace Faisuc\PinPayments;

use Illuminate\Support\ServiceProvider;

class PinPaymentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('pin-payments.php'),
            ], 'config');
        }

        $this->configureCurrency();
        $this->configureApiEnvironment();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'pin-payments');

        $this->app->singleton('pin-payments', function () {
            return new PinPayments;
        });
    }

    protected function configureCurrency()
    {
        $currency = config('pin-payments.currency', 'aud');

        PinPayments::useCurrency($currency);
    }

    protected function configureApiEnvironment()
    {
        $mode = config('pin-payments.mode', 'live');
        $modes = ['test', 'live'];

        if (in_array($mode, $modes)) {
            $apiUrl = config("pin-payments.{$mode}.api_url");
            $apiSecretKey = config("pin-payments.{$mode}.keys.secret");
            $apiPublishableKey = config("pin-payments.{$mode}.keys.publishable");
            
            PinPayments::setApiUrl($apiUrl);
            PinPayments::setApiSecretKey($apiSecretKey);
            PinPayments::setApiPublishableKey($apiPublishableKey);
        }
    }
}
