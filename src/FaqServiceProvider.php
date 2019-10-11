<?php

namespace faq;

use Illuminate\Support\ServiceProvider;

class FaqServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        file_exists(resource_path('/views/vazhenegar'))
            ? $this->loadViewsFrom(resource_path('/views/vazhenegar'), 'faq')
            : $this->loadViewsFrom(__DIR__ . '/views', 'faq');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        //copy view and css files to user project
        $this->publishes([
            __DIR__ . '/views' => resource_path('/views/vazhenegar'),
            __DIR__ . '/css' => public_path('/css'),
        ]);
    }
}