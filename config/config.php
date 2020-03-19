<?php

return [

    /**
     * Can only be 'live' or 'test'. If empty or invalid, 'live' will be used.
     */
    'mode'      => env('PINPAYMENTS_MODE', 'test'),
    'test'      => [
        'api_url'   =>  env('PINPAYMENTS_TEST_API_URL', 'test-api.pinpayments.com'),
        'keys'      => [
            'secret'        => env('PINPAYMENTS_TEST_API_SECRET_KEY', 'Ch6ZX7dra7gmgTsA476UGQ'),
            'publishable'   => env('PINPAYMENTS_TEST_API_PUBLISHABLE_KEY', 'pk_SaAw_mm0iZfrgflanbrWnQ'),
        ],
    ],
    'live'      => [
        'api_url'   => env('PINPAYMENTS_LIVE_API_URL', 'api.pinpayments.com'),
        'keys'      => [
            'secret'        => env('PINPAYMENTS_LIVE_API_SECRET_KEY', 'pk_SaAw_mm0iZfrgflanbrWnQ'),
            'publishable'   => env('PINPAYMENTS_LIVE_API_PUBLISHABLE_KEY', 'pk_FoOgqrL44E4B_F1m_tJUEg'),
        ],
    ],

    /**
     * The default currency will be 'AUD'.
     * You can refer to this url https://pinpayments.com/developers/api-reference/currency-support to set different currency.
     * If the currency is null or invalid the default currency will be used.
     */
    'currency'  => 'aud',
];