<?php namespace Shopavel;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;

class ShopavelServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('shopavel/core', 'shopavel', __DIR__.'/../../');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app['seeders'] = $app->share(function() use ($app)
        {
            return new Database\SeedResolver($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('seeders');
    }

}