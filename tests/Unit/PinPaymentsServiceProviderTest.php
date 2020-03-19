<?php

namespace Faisuc\PinPayments\Tests\Unit;

use Faisuc\PinPayments\PinPayments;
use Faisuc\PinPayments\Tests\BaseTestCase;
use Illuminate\Support\Facades\Config;

class PinPaymentsServiceProviderTest extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_can_get_api_url()
    {
        dd(PinPayments::createAsPinPaymentsCustomer('123@gmail.com'));
    }
}