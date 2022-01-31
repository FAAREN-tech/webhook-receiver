<?php

use \FaarenTech\WebhookReceiver\Http\Controllers\WebhookEndpointController;
use Illuminate\Support\Facades\Route;

Route::post('/{endpoint}', [
    WebhookEndpointController::class, 'handleWebhookRequest'
]);
