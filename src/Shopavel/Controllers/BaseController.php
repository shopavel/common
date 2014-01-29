<?php namespace Shopavel\Controllers;

use Illuminate\Container\Container;
use Illuminate\Routing\Controllers\Controller as IlluminateController;

/**
 * The base shopavel controller copies the behaviour of the default laravel
 * base controller and provides access to the app container.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
class BaseController extends IlluminateController {

    /**
     * The app container
     *
     * @var Container
     */
    protected $app;

    /**
     * Construct controller with access to the app container.
     *
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Provides a method based access to the app container.
     *
     * @param  string $service Service name.
     * @return mixed
     */
    public function app($service)
    {
        return $this->app[$service];
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

}