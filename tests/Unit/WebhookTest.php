<?php

namespace FaarenTech\WebhookReceiver\Tests\Unit;

use FaarenTech\WebhookReceiver\Models\Webhook;
use FaarenTech\WebhookReceiver\Tests\TestCase;

class WebhookTest extends TestCase
{
    //public function test_webhook_has_event_name()
    //{
    //    $webhook = Webhook::factory()->create(['event' => 'example.event']);
    //    $this->assertEquals("example.event", $webhook->event);
    //}

    public function test_case()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
