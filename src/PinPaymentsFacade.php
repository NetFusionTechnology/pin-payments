<?php

namespace Faisuc\PinPayments;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Faisuc\PinPayments\Skeleton\SkeletonClass
 */
class PinPaymentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pin-payments';
    }
}
