<?php

namespace FaarenTech\WebhookReceiver\Models;

use FaarenTech\WebhookReceiver\Database\Factories\WebhookFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webhook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function newFactory()
    {
        return WebhookFactory::new();
    }
}
