<?php namespace Shopavel\Warehouses;

use Shopavel\NestedSets\Node;

/**
 * A location a nested set node which contains references to geographical or
 * digital locations.
 *
 * @author Laurence Roberts <lsjroberts@gmail.com>
 */
class Location extends Node {

    /**
     * Get the location node and ancestors as a string.
     *
     * @param  string $separator
     * @return string
     */
    public function getString($separator = ', ')
    {
        $string = '';

        foreach ($this->getAncestorsAndSelf() as $ancestor)
        {
            $string .= $ancestor->name . $separator;
        }

        return $string;
    }

    /**
     * Return the location as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getString();
    }

}