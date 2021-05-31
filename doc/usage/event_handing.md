## Events

You can use a PSR-14 compatible event dispatcher to receive events from the client.
It may be useful if you want to process certain events with the same logic without duplicating calls to such code.  
These events are provided by the library:
- `RetailCrm\Api\Event\SuccessRequestEvent` will be dispatched if the request was successful.
- `RetailCrm\Api\Event\FailureRequestEvent` will be dispatched if the request was not successful. It won't be dispatched if the request cannot be formed at all.

Event API documentation can be found here:
* [`FailureRequestEvent`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Event-FailureRequestEvent.html)
* [`SuccessRequestEvent`](https://retailcrm.github.io/api-client-php/classes/RetailCrm-Api-Event-SuccessRequestEvent.html)

Here is an example of event handling with Symfony. We're using an empty Symfony 5.x project with annotations routing. `IndexController` 
outputs `/api/credentials` response without any changes. We'll handle all exceptions inside this event listener which will allow us 
to call the method without any `try...catch` blocks.

**config/services.yml**
```yaml
services:
    # ClientFactory definition.
    RetailCrm\Api\Interfaces\ClientFactoryInterface:
        class: 'RetailCrm\Api\Factory\ClientFactory'
        calls:
            - setCacheDir: ['%kernel.cache_dir%']
            - setEventDispatcher: ['@event_dispatcher']

    # Event listener definition. This listener will suppress exceptions and log them.
    App\EventListener\FailureRequestListener:
        tags:
            - { name: kernel.event_listener, event: RetailCrm\Api\Event\FailureRequestEvent, method: onRequestFailure }
```

**src/EventListener/FailureRequestListener.php**
```php
<?php

namespace App\EventListener;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Event\FailureRequestEvent;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;

class FailureRequestListener
{
    /** @var \Psr\Log\LoggerInterface */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function onRequestFailure(FailureRequestEvent $event): void
    {
        $exception = $event->getException();

        if ($exception instanceof ApiExceptionInterface) {
            $event->suppressThrow();
            $this->logger->error(sprintf(
                'CRM URL "%s", API error: %s',
                $event->getApiUrl(),
                (string) $exception
            ));
        }

        if ($exception instanceof ClientExceptionInterface) {
            $event->suppressThrow();
            $this->logger->error(sprintf(
                'CRM URL "%s", client error: %s, trace: %s',
                $event->getApiUrl(),
                $exception->getMessage(),
                $exception->getTraceAsString()
            ));
        }
    }
}
```

**src/Controller/IndexController.php**
```php
<?php

namespace App\Controller;

use RetailCrm\Api\Interfaces\ClientFactoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ClientFactoryInterface $clientFactory): Response
    {
        $client = $clientFactory->createClient('https://test3487687.retailcrm.pro', 'key');
        $credentials = $client->api->credentials();

        // Will print out empty model because https://test3487687.retailcrm.pro account does not exist.
        return $this->json($credentials);
    }
}
```
