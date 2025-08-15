<?php

namespace Chapa\Chapa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chapa\Chapa\Skeleton\SkeletonClass
 * @method static object initializePayment(array $data)
 * @method static object verifyTransaction($id)
 * @method static object createSubaccount(array $data)
 * @method static object createTransfer(array $data)
 * @method static object verifyTransfer($id)
 * @method static array bulkTransfer(array $data)
 * @method static object verifyBulkTransfer($id)
 * @method static array getBanks()
 * @method static string generateReference(?string $transactionPrefix = NULL)
 * @method static string getTransactionIDFromCallback()
 * @method static static setKey($key)
 */
class Chapa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelchapa';
    }
}
