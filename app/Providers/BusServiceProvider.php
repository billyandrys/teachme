<?php

namespace teachme\Providers;

use Illuminate\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;

class BusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param \Illuminate\Bus\Dispatcher $dispatcher
     */
    public function boot(Dispatcher $dispatcher)
    {
        $dispatcher->mapUsing(function ($command) {
            return Dispatcher::simpleMapping(
                $command, 'teachme\Commands', 'teachme\Handlers\Commands'
            );
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
