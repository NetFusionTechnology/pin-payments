<?php

use Money\Currencies\ISOCurrencies;
use Money\Money;
use Money\Parser\DecimalMoneyParser;

if (! function_exists('decimal_to_money')) {
    /**
     * Create a Money object from a decimal string / currency pair.
     *
     * @param string $value
     * @param string $currency
     * @return \Money\Money
     */
    function decimal_to_money(string $value, string $currency)
    {
        $moneyParser = new DecimalMoneyParser(new ISOCurrencies());

        return $moneyParser->parse($value, $currency);
    }

}