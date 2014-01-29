<?php namespace Shopavel\Collections;

/**
 * A container is an entity which can dynamically contain multiple other
 * entities within a collection. The contained entities are made available as
 * properties on the object using the magic __get() method.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
trait Container {

    /**
     * Add the collection to the container.
     *
     * @param Collection $collection
     */
    public function setCollection(Collection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * Look for the property within the collection.
     *
     * @param  string $key
     * @return mixed
     */
    public function __get($key)
    {
        if ($this->collection->has($key)) {
            return $this->collection->get($key);
        }

        return parent::__get($key);
    }

}
