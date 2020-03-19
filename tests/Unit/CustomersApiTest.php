<?php

namespace Faisuc\PinPayments\Tests\Unit;

use Faisuc\PinPayments\Tests\BaseTestCase;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\DecimalMoneyFormatter;
use Money\Money;
use Money\Parser\DecimalMoneyParser;

class CustomersApiTest extends BaseTestCase
{
    /** @test */
    public function assertMe()
    {
        $moneyParser = new DecimalMoneyParser(new ISOCurrencies());

        dd($moneyParser->parse('100.123', 'AUD'));
    }
}