<?php

namespace FaarenTech\WebhookReceiver\Tests;

use FaarenTech\WebhookReceiver\WebhookReceiverServiceProvider;
use Tests\CreatesApplication;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function getPackageProviders($app)
    {
        return [
            WebhookReceiverServiceProvider::class
        ];
    }

    public function getEnvironmentSetUp($app)
    {

    }

}
