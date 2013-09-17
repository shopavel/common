<?php namespace Shopavel\Collections;

/**
 * Immutable collection that does not allow items to be added or removed.
 *
 * @author  Laurence Roberts <lsjroberts@outlook.com>
 */
class ImmutableCollection extends Collection {

    public function put($key, $value)
    {
        $this->guard();
    }

    public function shift()
    {
        $this->guard();
    }

    public function push($value)
    {
        $this->guard();
    }

    public function pop()
    {
        $this->guard();
    }

    public function forget($key)
    {
        $this->guard();
    }

    public function each(Closure $callback)
    {
        $this->guard();
    }

    public function map(Closure $callback)
    {
        $this->guard();
    }

    public function filter(Closure $callback)
    {
        $this->guard();
    }

    public function sort(Closure $callback)
    {
        $this->guard();
    }

    public function sortBy(Closure $callback)
    {
        $this->guard();
    }

    public function reverse()
    {
        $this->guard();
    }

    protected function guard()
    {
        throw new CollectionException("Can not modify an immutable collection.");
    }
}