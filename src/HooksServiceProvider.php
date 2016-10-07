<?php

namespace SalFay\LaravelHooks;

use Illuminate\Support\ServiceProvider;

class HooksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('LaravelHooks', function()
                {
                    return new \SalFay\LaravelHooks\LaravelHooks;
                });
    }
}
