<?php

namespace FaarenTech\WebhookReceiver\Http\Controllers;

use FaarenTech\WebhookReceiver\Models\Webhook;

class WebhookCrudController extends Controller
{
    public function list()
    {
        $webhooks = Webhook::all();
        return response()->json($webhooks);
    }

    public function find($id)
    {
        $webhook = Webhook::findOrFail($id);
        return response()->json($webhook);
    }

    public function delete($id)
    {
        $webhook = Webhook::findOrFail($id);
        $webhook->delete();

        return response()->json('deleted');
    }
}
