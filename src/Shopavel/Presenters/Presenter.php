<?php namespace Shopavel\Presenters;

/**
 * Presenter to modify the way a resource's properties are returned. If a
 * method matching the property name is found, it is used instead.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
class Presenter {

    protected $resource;

    public function __construct($resource = null)
    {
        $this->resource = $resource;
    }

    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function __get($name)
    {
        if (method_exists($this, $name))
        {
            return $this->{$name}();
        }

        return $this->resource->$name;
    }

}