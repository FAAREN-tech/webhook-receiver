# FAAREN-Tech 

## Open Tasks

1. Add authorization logic (e.g. for Stripe)
2. Custom table name

## Webhook Receiver

This package will be used by all FAAREN Services which receive webhooks. It provides a basic structure to handle incoming webhooks.
With this package you can simply define new endpoints for webhooks. Those webhooks will be stored within a database. Via a simple HandlerInterface you can define custom handlers for each of your endpoints.  
This package also offers a basic CRUD functionality to interact with your stored webhooks via the `Webhook` model.

## Installation

Call the following command:

```shell
composer require faaren-tech/webhook-receiver
```

The package is tested only for Laravel 8.x.

## Config

Publish the relevant configuration file via (select the WebhookReceiverServiceProvider from the shown list):

```shell
php artisan vendor:publish 
```
- You can customize the middleware separately for webhook endpoints and crud-routes. 
- You can customize the prefix for both the webhook endpoints and the crud-routes.

## Creating new endpoints

It is very easy to add new endpoints to your application.

1. Create a new webhook handler, e.g. `MyExampleWebhookHandler` within `app/Http/WebhookEndpoints`
2. Implement `FaarenTech\WebhookReceiver\Interfaces\WebhookEndpointHandlerInterface`
3. Add the endpoint to your `config/webhook_receiver` configuration file (see below)
4. Set up your new endpoint within your webhook sender (e.g. MailJet, Stripe, etc) for the endpoint `webhook/endpoints/my-example-endpoint`

```php
return [
    // other configuration options
    'endpoints' => [
        'my-example-endpoint' => MyExampleWebhookHandler::class
    ]
];
```

## Examples

If you want you can take a look at the following files:

- [ExampleRequests](example-requests.rest): Some simple examples. Can be executed directly from your favorite IDE (PhpStorm ;-))
- [ExampleHandler](src/Http/WebhookEndpoints/ExampleEndpointHandler.php): a example implementation 

## Testing

Add the relevant testsuite to your main phpunit.xml:

```xml
<testsuites>
    ...
    <testsuite name="FaarenTechWebhookReceiver">
        <directory suffix="Test.php">./vendor/faaren-tech/webhook-receiver</directory>
    </testsuite>
</testsuites>
```
