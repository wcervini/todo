<?php

namespace Demo\Todo;

use Illuminate\Support\ServiceProvider;

class DemoTodoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__."/Http/routes.php"
        $this->publishes([__DIR__."views"=> resource_path( "views/vendors/demo-todo")])
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
