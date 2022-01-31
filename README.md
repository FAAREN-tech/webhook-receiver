# FAAREN-Tech 
## Webhook Receiver

This package will be used by all FAAREN Services which receive webhooks. It provides a basic structure to handle incoming webhooks.

## Config

Publish the relevant configuration file via:

```shell
php artisan vendor:publish --provider="FaarenTech\WebhookReceiver\WebhookReceiverPackageServiceProvider" --tag="config"
```

## Creating new endpoints
Create a new class ExampleWebhookHandler.php within a directory of your choice (e.g. `app/WebhookEndpoints/` ). This class must implement the 

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
