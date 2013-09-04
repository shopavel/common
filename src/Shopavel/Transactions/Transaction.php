<?php namespace Shopavel\Transactions;

use Illuminate\Container\Container;
use Shopavel\Validators\ValidatorInterface;

class Transaction implements TransactionInterface {

    protected $app;
    protected $db;
    protected $validators;

    public function __construct(array $validators = null, Container $app, Capsule $db)
    {
        $this->validators = $validators;
        $this->app = $app;
        $this->db = $db;
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