<?php namespace Shopavel\Warehouses;

use Shopavel\NestedSets\Node;

class Location extends Node {

    public function getString($separator = ', ')
    {
        $string = '';

        foreach ($this->getAncestorsAndSelf() as $ancestor)
        {
            $string .= $ancestor->name . $separator;
        }

        return $string;
    }

    public function __toString()
    {
        return $this->getString();
    }

}