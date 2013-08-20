<?php namespace Shopavel\Controllers;

use Illuminate\Routing\Controllers\Controller as IlluminateController;

class Controller extends IlluminateController {

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