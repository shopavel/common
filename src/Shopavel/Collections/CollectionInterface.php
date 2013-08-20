<?php namespace Shopavel\Collections;

/**
 * Interface for collections.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
class CollectionInterface {

    public function all();
    public function exists($key);
    public function get($key);
    public function first();
    public function last();
    public function add($key, $value);
    public function remove($key);

}