<?php

namespace FaarenTech\WebhookReceiver\Interfaces;

use FaarenTech\WebhookReceiver\Models\Webhook;

interface WebhookEndpointInterface
{
    /**
     * Takes a Webhook instance and handles it
     * @param Webhook $webhook
     * @returns bool
     */
    public function handle(Webhook $webhook): bool;
}
