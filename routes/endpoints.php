<?php

use \FaarenTech\WebhookReceiver\Http\Controllers\WebhookEndpointController;
use Illuminate\Support\Facades\Route;

Route::match(['POST', 'GET'],'/{endpoint}', [
    WebhookEndpointController::class, 'handleWebhookRequest'
]);
