<?php

return [
    /**
     * A prefix to define for the URL
     */
    'prefix' => 'webhook/endpoints',

    /**
     * A prefix applied to the crud endpoints
     */
    'crud_prefix' => 'webhook/crud',

    /**
     * The middlewares applied to the endpoint(s)
     */
    'middleware' => [],

    /**
     * Middleware applied to the CRUD-endpoints
     */
    'crud_middleware' => [],

    /**
     * Here you can register different endpoints
     * Key is the specific endpoint
     * Value is an instance of WebhookEndpointHandlerInterface
     */
    'endpoints' => [
        'example-endpoint' => \FaarenTech\WebhookReceiver\Http\WebhookEndpoints\ExampleEndpointHandler::class
    ]
];
