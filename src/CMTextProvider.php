<?php

namespace hexonthebeach\LaravelCMTextProvider;

use CMText\TextClient;
use Illuminate\Support\ServiceProvider;

class CMTextProvider extends ServiceProvider
{
    /**
     * Defer registering to keep the app fast.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TextClient::class, function ($app) {
            return new TextClient(
                $app['config']['cmtext.api_key'],
                $app['config']['cmtext.gateway']
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [TextClient::class];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/cmtext.php' => config_path('cmtext.php'),
        ]);
    }
}
