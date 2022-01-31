<?php

namespace FaarenTech\WebhookReceiver\Http\Controllers;

use Illuminate\Http\Request;

class WebhookEndpointController extends Controller
{
    public function handleWebhookRequest(Request $request, $endpoint)
    {
        dd("fooo", $endpoint);
    }
}
