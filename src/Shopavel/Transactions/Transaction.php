<?php namespace Shopavel\Transactions;

use Illuminate\Container\Container;

class Transaction implements TransactionInterface {

    protected $app;
    protected $db;
    protected $validators;

    public function __construct(array $validators = null, Container $app, Capsule $db)
    {
        $this->app = $app;
        $this->db = $db;
        $this->validators = $validators;
    }

    public function validate($object)
    {
        if (count($this->validators) == 0) return;

        foreach ($this->validators as $validator)
        {
            $validator->validate($object);
        }
    }

}