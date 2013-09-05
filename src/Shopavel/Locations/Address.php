<?php namespace Shopavel\Addresses;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    public function location()
    {
        return $this->hasOne('Shopavel\Locations\Location');
    }

    public function getLocation()
    {
        return $this->location()->get();
    }

    public static function getFields()
    {
        return ['line_1', 'line_2', 'line_3', 'line_4'];
    }

    public function getString($separator = ', ')
    {
        $string = '';

        foreach ($this->getFields() as $field)
        {
            if ($this->$field)
            {
                $string .= $this->$field . $separator;
            }
        }

        $string .= $this->getLocation()->getString($separator);

        return $string;
    }

    public function __toString()
    {
        return $this->getString();
    }

}