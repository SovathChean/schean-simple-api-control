<?php

namespace Schean\ApiController;

use Illuminate\Support\ServiceProvider;

class ApiControllerServiceProvider extends ServiceProvider
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
        $this->publishes([
            __DIR__.'/schean/api-controller/src/controller' => app_path('Http/Controllers/ApiController.php'),
        ]);
    }
}
