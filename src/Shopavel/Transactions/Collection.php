<?php namespace Shopavel\Transactions;

use Shopavel\Collections\Collection as BaseCollection;

class Collection extends BaseCollection {

    public function __call($method, $parameters)
    {
        foreach ($this->items as $item)
        {
            if (method_exists($item, $method))
            {
                return call_user_func_array(array($instance, $method), $args);
            }
        }
    }

}