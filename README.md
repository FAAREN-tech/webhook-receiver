# FAAREN-Tech 
## Webhook Receiver

This package will be used by all FAAREN Services which receive webhooks. It provides a basic structure to handle incoming webhooks.

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
