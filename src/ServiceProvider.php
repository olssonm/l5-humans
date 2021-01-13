<?php

namespace Olssonm\Humans;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        // Unless routes are cached, load the routes.php-file
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routes.php';
        }

        // Load default view
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'humans');

        // Publishing view
        $this->publishes([
            __DIR__ . '/resources/stubs' => resource_path('views/vendor/humans'),
        ], 'views');
    }
}
