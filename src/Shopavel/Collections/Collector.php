<?php namespace Shopavel\Collections;

/**
 * A collector is an entity which can dynamically contain multiple other
 * entities within a collector. The collected entities are made available as
 * properties on the object using the magic __get() method.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
trait Collector {

    /**
     * Add the collection to the collector.
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
    }

}
