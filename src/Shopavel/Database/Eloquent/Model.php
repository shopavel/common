<?php namespace Shopavel\Database\Eloquent;

use Illuminate\Database\Eloquent\Model as IlluminateModel;

class Model extends IlluminateModel {

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = array())
    {
        // Prefix the table with the shopavel prefix.
        $this->setTable(app()->get('config')->get('shopavel::database.prefix') . $this->table);

        parent::__construct($attributes);
    }

}