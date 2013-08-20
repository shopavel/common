<?php namespace Shopavel\Transactions;

/**
 * Interface for transactions.
 *
 * @author  Laurence Roberts <lsjroberts@gmail.com>
 */
interface TransactionInterface {

    public function validate($object);

}