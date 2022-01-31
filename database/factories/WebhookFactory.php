<?php

namespace FaarenTech\WebhookReceiver\Database\Factories;

use FaarenTech\WebhookReceiver\Models\Webhook;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class WebhookFactory extends Factory
{
    protected $model = Webhook::class;

    public function definition():array
    {
        $payload = new \stdClass();
        $payload->uuid = $this->faker->uuid;
        $payload->details = [
            'foo' => $this->faker->words(5),
            'bar' => $this->faker->words(3),
            'amount' => $this->faker->numberBetween(400, 3000)
        ];

        $date = Carbon::now();
        $payload->timestamps = [
            'created_at' => $date->subHour()->toDateTime(),
            'updated_at' => $date->toDateTime()
        ];

        return [
            'event' => $this->faker->word . "." . $this->faker->word,
            'payload' => $payload
        ];
    }
}
