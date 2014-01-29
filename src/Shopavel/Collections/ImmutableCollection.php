<?php namespace Shopavel\Collections;

/**
 * Immutable collection that does not allow items to be added or removed.
 *
 * @author  Laurence Roberts <lsjroberts@outlook.com>
 */
class ImmutableCollection extends Collection {

    public function put($key, $value)
    {
        $this->guard(__FUNCTION__);
    }

    public function shift()
    {
        $this->guard(__FUNCTION__);
    }

    public function push($value)
    {
        $this->guard(__FUNCTION__);
    }

    public function pop()
    {
        $this->guard(__FUNCTION__);
    }

    public function forget($key)
    {
        $this->guard(__FUNCTION__);
    }

    public function each(Closure $callback)
    {
        $this->guard(__FUNCTION__);
    }

    public function map(Closure $callback)
    {
        $this->guard(__FUNCTION__);
    }

    public function filter(Closure $callback)
    {
        $this->guard(__FUNCTION__);
    }

    public function sort(Closure $callback)
    {
        $this->guard(__FUNCTION__);
    }

    public function sortBy(Closure $callback)
    {
        $this->guard(__FUNCTION__);
    }

    public function reverse()
    {
        $this->guard(__FUNCTION__);
    }

    protected function guard($function = null)
    {
        throw new CollectionException(sprintf("Can not call %s on an immutable collection.", $function));
    }
}