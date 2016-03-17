<?php

namespace thedevsaddam\multiple_route;

use Illuminate\Support\ServiceProvider;

class multiple_routeServiceProvider extends ServiceProvider
{

    protected  $commands = [
        'thedevsaddam\multiple_route\Console\Commands\CreateRouteCommand',
        'thedevsaddam\multiple_route\Console\Commands\RemoveRouteCommand'
    ];
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/Console/Kernel.php';
        require __DIR__ . '/Console/Commands/CreateRouteCommand.php';
        require __DIR__ . '/Console/Commands/RemoveRouteCommand.php';
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}