<?php

namespace Quetface\Laravel;

use Quetface\Quetface;
use Illuminate\Foundation\Application as Laravel;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Boot the service provider
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            if ($this->app instanceof Laravel) {
                $this->publishes([
                    __DIR__ . '/Config/quetface-sdk' => config_path('quetface-sdk.php')
                ], 'config');
            }
        }
    }

    /**
     * Register service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('quetface', function () {
            return new Quetface([
                'access-token' => config('quetface-sdk.access_token'),
                'scan-key'     => config('quetface-sdk.scan_key'),
                'sms-key'      => config('quetface-sdk.sms_key')
            ]);
        });

        $this->app->bind('quetface.scan', function () {
            return $this->app->make('quetface')->scan();
        });

        $this->app->bind('quetface.facebook', function () {
            return $this->app->make('quetface')->facebook();
        });

        $this->app->bind('quetface.sms', function () {
            return $this->app->make('quetface')->sms();
        });
    }
}