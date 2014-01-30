<?php namespace Shopavel\Controllers;

use Illuminate\Container\Container;
use Illuminate\Routing\Controller as IlluminateController;

/**
 * The base shopavel controller copies the behaviour of the default laravel
 * base controller and provides access to the app container.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
class BaseController extends IlluminateController {

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