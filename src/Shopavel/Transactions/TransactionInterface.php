<?php namespace Shopavel\Transactions;

/**
 * Interface for transactions.
 *
 * @author  Laurence Roberts <lsjroberts@outlook.com>
 */
interface TransactionInterface {

    public function validate($object);

}