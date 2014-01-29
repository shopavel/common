<?php namespace Shopavel\Addresses;

use Illuminate\Database\Eloquent\Model;

/**
 * Address model that contains a location and additional lines.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
class Address extends Model {

    /**
     * The address location node relationship.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->hasOne('Shopavel\Locations\Location');
    }

    /**
     * The address location node entity.
     *
     * @return Location
     */
    public function getLocation()
    {
        return $this->location()->get();
    }

    /**
     * Get the additional line fields for an address.
     *
     * @return array
     */
    public static function getFields()
    {
        return ['line_1', 'line_2', 'line_3', 'line_4'];
    }

    /**
     * Get the address fields and location combined as a string.
     *
     * @param  string $separator
     * @return string
     */
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

    /**
     * Return the address as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getString();
    }

}