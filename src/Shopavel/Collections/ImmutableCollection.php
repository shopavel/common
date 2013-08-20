<?php namespace Shopavel\Collections;

/**
 * Immutable collection that does not allow items to be added or removed.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class ImmutableCollection extends Collection {

    public function add($key, $value)
    {
        throw new CollectionException("Can not modify an immutable collection.");
    }

    public function remove($key)
    {
        throw new CollectionException("Can not modify an immutable collection.");
    }

}