<?php

namespace FaarenTech\WebhookReceiver\Http\WebhookEndpoints;

use FaarenTech\WebhookReceiver\Interfaces\WebhookEndpointHandlerInterface;
use FaarenTech\WebhookReceiver\Models\Webhook;
use Illuminate\Http\Request;

class ExampleEndpointHandler implements WebhookEndpointHandlerInterface
{
    protected Request $request;
    protected Webhook $webhook;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle(Webhook $webhook): void
    {
        // Here you can trigger a job or any other action you want
        dd("Webhook handled", $webhook);
    }

    public function getEventName(): string
    {
        // Returns the relevant event name from the webhook request
        return (string) $this->request->get('event');
    }

    public function getPayload(): \stdClass
    {
        // Returns the relevant payload from the webhook request
        return (object) $this->request->get('payload');
    }
}
