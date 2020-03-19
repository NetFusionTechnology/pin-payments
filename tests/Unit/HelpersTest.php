<?php

namespace Faisuc\PinPayments\Tests\Unit;

use Faisuc\PinPayments\Tests\BaseTestCase;
use Money\Money;

class HelpersTest extends BaseTestCase
{
    /** @test */
    public function decimal_to_money()
    {
        $money = decimal_to_money('100.00', config('pin-payments.currency'));
        $this->assertEquals(10000, $money->getAmount());
    }
}