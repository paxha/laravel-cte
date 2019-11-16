<?php

namespace Paxha\LaravelCte;

use Illuminate\Support\ServiceProvider;
use Paxha\LaravelCte\Connectors\ConnectionFactory;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });
    }
}
