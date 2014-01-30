<?php namespace Shopavel\Transactions;

use Shopavel\Validators\ValidatorInterface;

class Transaction implements TransactionInterface {

    protected $validators;

    public function __construct(array $validators = null)
    {
        $this->validators = $validators;
    }

    public function addValidator()
    {
        $validators = func_get_args();

        $this->validators = array_merge($this->validators, $validators);
    }

    public function validate($object)
    {
        if (count($this->validators) == 0) return;

        foreach ($this->validators as $validator)
        {
            if ($validator instanceof ValidatorInterface)
            {
                $validator->validate($object);
            }
        }
    }

}