<?php

use FaarenTech\WebhookReceiver\Http\Controllers\WebhookCrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebhookCrudController::class, 'list']);
Route::get('/{id}', [WebhookCrudController::class, 'find']);
Route::delete('/{id}', [WebhookCrudController::class, 'delete']);

