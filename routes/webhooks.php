<?php

use \FaarenTech\WebhookReceiver\Http\Controllers\WebhookEndpointController;
use FaarenTech\WebhookReceiver\Http\Controllers\WebhookCrudController;
use Illuminate\Support\Facades\Route;

Route::prefix('crud')->group(function() {
    Route::get('/', [WebhookCrudController::class, 'list']);
    Route::get('/{id}', [WebhookCrudController::class, 'find']);
    Route::delete('/{id}', [WebhookCrudController::class, 'delete']);
});

Route::match(['POST', 'GET'],'/{endpoint}', [
    WebhookEndpointController::class, 'handleWebhookRequest'
]);
