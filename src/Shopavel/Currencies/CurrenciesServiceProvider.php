<?php namespace Shopavel\Currencies;

use Illuminate\Support\ServiceProvider;

/**
 * Currencies service provider.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class CurrenciesServiceProvider extends ServiceProvider {

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
        $this->package('shopavel/currencies');

        $this->app['currency.converter'] = $this->app->share(function($app)
        {
            return new Conversion\Converter;
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
        return array('currency.converter');
    }

}