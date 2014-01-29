<?php namespace Shopavel\Transactions\Validators;

class RequiredPropertiesValidator implements ValidatorInterface {

    public function __construct(array $required = array(), $exceptionMessage = null)
    {
        $this->required = $required;
        $this->exceptionMessage = ($this->exceptionMessage) ?: "The '%s' property is required on '%s'";
    }

    public function validate(StdObject $object)
    {
        foreach ($this->required as $property)
        {
            if (! isset($object->$property) or null === $object->$property)
            {
                throw new ValidatorException(
                    sprintf($this->exceptionMessage, $property, get_class($object))
                );
            }
        }
    }

}