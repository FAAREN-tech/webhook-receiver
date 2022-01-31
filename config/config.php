<?php

return [
    /**
     * A prefix to define for the URL
     */
    'prefix' => 'webhook-endpoints',

    /**
     * The middlewares applied to the endpoint(s)
     */
    'middleware' => [],

    /**
     * Here you can register different endpoints
     * Key is the specific endpoint
     * Value is an instance of WebhookEndpointHandlerInterface
     */
    'endpoints' => [
        'example-endpoint' => \FaarenTech\WebhookReceiver\Http\WebhookEndpoints\ExampleEndpointHandler::class
    ]
];
