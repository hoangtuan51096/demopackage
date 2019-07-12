<?php

namespace Tuanha\Demopackage;

use Illuminate\Support\ServiceProvider;

class DemoPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'simple');
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes/mypackage.php';
        }
    }
    public function register()
    {
        //
    }
}