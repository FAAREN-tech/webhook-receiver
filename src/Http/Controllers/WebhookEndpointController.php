<?php

namespace FaarenTech\WebhookReceiver\Http\Controllers;

use FaarenTech\WebhookReceiver\Interfaces\WebhookEndpointHandlerInterface;
use FaarenTech\WebhookReceiver\Models\Webhook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebhookEndpointController extends Controller
{
    /**
     * Tries to handle the incoming request
     * 1. Store the webhook
     *
     * @param Request $request
     * @param $endpoint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|Response|void
     * @throws \WebhookEndpointException
     */
    public function handleWebhookRequest(Request $request, $endpoint)
    {
        $availableEndpoints = config('webhook_receiver.endpoints');

        if(!array_key_exists($endpoint, $availableEndpoints)) {
            return response(Response::HTTP_NOT_FOUND);
        }

        try {
            /** @var WebhookEndpointHandlerInterface $handler */
            $handler = new $availableEndpoints[$endpoint]($request);
            $webhook = $this->storeWebhook($handler);
            $handler->handle($webhook);
        } catch (\Exception $ex) {
            throw new \WebhookEndpointException(
                "There occurred an error while handling an webhook request: {$ex->getMessage()}"
            );
        }
    }

    /**
     * Stores the current webhook in the database
     *
     * @param WebhookEndpointHandlerInterface $handler
     * @return Webhook
     */
    protected function storeWebhook(WebhookEndpointHandlerInterface $handler): Webhook
    {
        return Webhook::create([
            'event' => $handler->getEventName(),
            'payload' => $handler->getPayload()
        ]);
    }
}
