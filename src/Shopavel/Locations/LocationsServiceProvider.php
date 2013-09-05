<?php namespace Shopavel\Locations;

use Illuminate\Support\ServiceProvider;

/**
 * Locations service provider.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class LocationsServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('shopavel/locations');

        $this->app['location.address'] = $this->app->share(function($app)
        {
            return new Address;
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('warehouse', 'warehouse.container', 'warehouse.stock');
    }

}