<?php

namespace Faisuc\PinPayments\Tests;

use Faisuc\PinPayments\PinPaymentsServiceProvider;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;
use Orchestra\Testbench\TestCase;

abstract class BaseTestCase extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [PinPaymentsServiceProvider::class];
    }
}