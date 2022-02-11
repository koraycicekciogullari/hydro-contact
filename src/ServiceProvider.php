<?php

namespace Koraycicekciogullari\HydroContact;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/hydro-contact.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('hydro-contact.php'),
        ], 'config');
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');
        $this->loadRoutesFrom(__DIR__ . '/Routes/contact-route.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'hydro-contact'
        );
    }
}
