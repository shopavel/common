<?php namespace Shopavel\Collections;

use ArrayAccess;
use Countable;

/**
 * Default collection.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class Collection implements CollectionInterface, ArrayAccess, Countable {

    protected $items;

    public function all()
    {
        return $items;
    }

    public function exists($key)
    {
        return null !== array_get($this->items, $key);
    }

    public function get($key)
    {
        if (! $this->exists($key))
        {
            throw new CollectionException("Key '" . $key . "' does not exist on collection.");
        }
        return array_get($this->items, $key);
    }

    public function first()
    {
        return reset($this->items);
    }

    public function last()
    {
        return end($this->items);
    }

    public function add($key, $value)
    {
        if ($this->exists($key))
        {
            throw new CollectionException("Key '" . $key . "' already exists on collection.");
        }
        array_set($this->items, $key, $value);
    }

    public function remove($key)
    {
        if (! $this->exists($key))
        {
            throw new CollectionException("Key '" . $key . "' does not exist on collection.");
        }
       array_forget($this->items, $key);
    }

    public function offsetExists($offset)
    {
        return $this->exists($offset);
    }

    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        return $this->add($offset, $value);
    }

    public function offsetUnset($offset)
    {
        return $this->remove($offset);
    }

    public function count()
    {
        return count($this->items);
    }

}