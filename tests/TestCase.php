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
        include_once __DIR__ . "/../database/migrations/2022_01_29_213456_create_webhooks_table.php";

        (new \CreateWebhooksTable)->up();
    }

}
