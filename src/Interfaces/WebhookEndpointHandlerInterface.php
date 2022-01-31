<?php

namespace FaarenTech\WebhookReceiver\Interfaces;

use FaarenTech\WebhookReceiver\Models\Webhook;
use Illuminate\Http\Request;

interface WebhookEndpointHandlerInterface
{
    /**
     * Initializes a new instance of the handler
     * @param Request $request
     */
    public function __construct(Request $request);

    /**
     * Takes a Webhook instance and handles it
     * @param Webhook $webhook
     */
    public function handle(Webhook $webhook): void;

    /**
     * Returns the name of the event
     * @return string
     */
    public function getEventName(): string;

    /**
     * Returns the webhook's payload as stdClass Object
     *
     * @return \stdClass
     */
    public function getPayload(): \stdClass;
}
