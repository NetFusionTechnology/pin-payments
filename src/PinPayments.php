<?php

namespace Faisuc\PinPayments;

class PinPayments
{
    /**
     * The current currency.
     * 
     * @var string
     */
    protected static $currency = 'aud';

    protected static $apiUrl;

    protected static $apiSecretKey;

    protected static $apiPublishableKey;

    public static function useCurrency($currency)
    {
        static::$currency = $currency;
    }

    public static function usesCurrency()
    {
        return static::$currency;
    }

    public static function getApiUrl()
    {
        return static::$apiUrl;
    }

    public static function setApiUrl($apiUrl)
    {
        static::$apiUrl = $apiUrl;
    }

    public static function setApiSecretKey($apiSecretKey)
    {
        static::$apiSecretKey = $apiSecretKey;
    }

    public static function getApiSecretKey()
    {
        return static::$apiSecretKey;
    }

    public static function setApiPublishableKey($apiPublishableKey)
    {
        static::$apiPublishableKey = $apiPublishableKey;
    }

    public static function getApiPublishableKey()
    {
        return static::$apiPublishableKey;
    }

    public static function createAsPinPaymentsCustomer($email)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, PinPayments::getApiUrl() . '/1/customers');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "email=" . $email);
        curl_setopt($ch, CURLOPT_USERPWD, PinPayments::getApiSecretKey() . ':' . '');

        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return json_encode($result);
    }
}
