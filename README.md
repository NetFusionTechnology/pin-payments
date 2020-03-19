# Laravel Package for PinPayments

[![Latest Version on Packagist](https://img.shields.io/packagist/v/faisuc/pin-payments.svg?style=flat-square)](https://packagist.org/packages/faisuc/pin-payments)
[![Build Status](https://img.shields.io/travis/faisuc/pin-payments/master.svg?style=flat-square)](https://travis-ci.org/faisuc/pin-payments)
[![Quality Score](https://img.shields.io/scrutinizer/g/faisuc/pin-payments.svg?style=flat-square)](https://scrutinizer-ci.com/g/faisuc/pin-payments)
[![Total Downloads](https://img.shields.io/packagist/dt/faisuc/pin-payments.svg?style=flat-square)](https://packagist.org/packages/faisuc/pin-payments)

Accept payments, your way
Pin Payments gives you a flexible platform for accepting card payments from your customers.

## Installation

You can install the package via composer:

```bash
composer require faisuc/pin-payments
```

## Currently supported API endpoints
* Balance
    * GET /balance
    ``` curl
    200 OK
    {
      "response": {
        "available": [
          {
            "amount": 400,
            "currency": "AUD"
          }
        ],
        "pending": [
          {
            "amount": 1200,
            "currency": "AUD"
          }
        ]
      }
    }
    ```

* Bank Accounts
    * POST /bank_accounts
    ``` curl
    {
      "response": {
        "token": "ba_nytGw7koRg23EEp9NTmz9w",
        "name": "Mr Roland Robot",
        "bsb": "123456",
        "number": "XXXXXX321",
        "bank_name": "",
        "branch": ""
      },
      "ip_address": "192.0.2.42"
    }
    ```

* Cards
    * POST /cards
    ``` curl
    {
      "response": {
        "token": "card_pIQJKMs93GsCc9vLSLevbw",
        "scheme": "master",
        "display_number": "XXXX-XXXX-XXXX-0000",
        "issuing_country": "US",
        "expiry_month": 5,
        "expiry_year": 2021,
        "name": "Roland Robot",
        "address_line1": "42 Sevenoaks St",
        "address_line2": null,
        "address_city": "Lathlain",
        "address_postcode": "6454",
        "address_state": "WA",
        "address_country": "Australia",
        "customer_token": null,
        "primary": null
      },
      "ip_address": "192.0.2.42"
    }
    ```
    
* Charges
    * POST /charges
    * GET /charges/charge-token
    * POST /charges/charge-token/refunds
    ``` curl
    {
      "response": {
        "token": "ch_lfUYEBK14zotCTykezJkfg",
        "success": true,
        "amount": 400,
        "currency": "AUD",
        "description": "test charge",
        "email": "roland@pinpayments.com",
        "ip_address": "203.192.1.172",
        "created_at": "2012-06-20T03:10:49Z",
        "status_message": "Success",
        "error_message": null,
        "card": {
          "token": "card_pIQJKMs93GsCc9vLSLevbw",
          "scheme": "master",
          "display_number": "XXXX-XXXX-XXXX-0000",
          "issuing_country": "US",
          "expiry_month": 5,
          "expiry_year": 2021,
          "name": "Roland Robot",
          "address_line1": "42 Sevenoaks St",
          "address_line2": null,
          "address_city": "Lathlain",
          "address_postcode": "6454",
          "address_state": "WA",
          "address_country": "Australia",
          "customer_token": null,
          "primary": null
        },
        "transfer": [],
        "amount_refunded": 0,
        "total_fees": 42,
        "merchant_entitlement": 358,
        "refund_pending": false,
        "authorisation_expired": false,
        "captured": true,
        "captured_at": "2012-06-20T03:10:49Z",
        "settlement_currency": "AUD",
        "active_chargebacks": false,
        "metadata": {
          "OrderNumber": "123456",
          "CustomerName": "Roland Robot"
        }
      }
    }
    ```
    
* Customers
    * POST /customers
    * GET /customers/customer-token
    ``` curl
    {
      "response": {
        "token": "cus_XZg1ULpWaROQCOT5PdwLkQ",
        "email": "roland@pinpayments.com",
        "created_at": "2012-06-22T06:27:33Z",
        "card": {
          "token": "card_nytGw7koRg23EEp9NTmz9w",
          "scheme": "master",
          "display_number": "XXXX-XXXX-XXXX-0000",
          "issuing_country": "US",
          "expiry_month": 5,
          "expiry_year": 2021,
          "name": "Roland Robot",
          "address_line1": "42 Sevenoaks St",
          "address_line2": null,
          "address_city": "Lathlain",
          "address_postcode": "6454",
          "address_state": "WA",
          "address_country": "Australia",
          "customer_token": "cus_XZg1ULpWaROQCOT5PdwLkQ",
          "primary": true
        }
      }
    }
    ```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email succute@yahoo.com instead of using the issue tracker.

## Credits

- [Neil Carlo Sucuangco](https://github.com/faisuc)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
