<?php

namespace FaarenTech\WebhookReceiver\Tests\Unit;

use FaarenTech\WebhookReceiver\Models\Webhook;
use FaarenTech\WebhookReceiver\Tests\TestCase;
use Illuminate\Database\Eloquent\Model;

class WebhookTest extends TestCase
{
    protected Model $webhook;

    public function setUp(): void
    {
        parent::setUp();
        $this->webhook = Webhook::factory()->create();
    }

    public function test_webhook_has_event_name()
    {
        $this->assertNotNull($this->webhook->event);
    }

    public function test_webhook_has_payload()
    {
        $this->assertNotNull($this->webhook->payload);
    }
}
