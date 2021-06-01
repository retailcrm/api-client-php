Here is a complete example of the Client usage with error handling. It fetches the filtered orders data and prints it out.

**Note:** it's not recommended using this example to process all API client errors in your application. It will clutter your code too much.
There are other options for exception processing. You can [match more generic exceptions in the hierarchy](../error_handling.md) or use 
[events](../event_handing.md) to process exceptions.

```php
<?php

use Psr\Http\Client\ClientExceptionInterface as PsrClientExceptionInterface;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Http\Client\RequestExceptionInterface;
use RetailCrm\Api\Exception\Api\AccessDeniedException;
use RetailCrm\Api\Exception\Api\AccountDoesNotExistException;
use RetailCrm\Api\Exception\Api\ApiErrorException;
use RetailCrm\Api\Exception\Api\InvalidCredentialsException;
use RetailCrm\Api\Exception\Api\MissingCredentialsException;
use RetailCrm\Api\Exception\Api\MissingParameterException;
use RetailCrm\Api\Exception\Api\ValidationException;
use RetailCrm\Api\Exception\Client\HandlerException;
use RetailCrm\Api\Exception\Client\HttpClientException;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Model\Entity\CustomersCorporate\CustomerCorporate;
use RetailCrm\Api\Model\Filter\Orders\OrderFilter;
use RetailCrm\Api\Model\Request\Orders\OrdersRequest;
use Throwable;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

$request              = new OrdersRequest();
$request->filter      = new OrderFilter();
$request->filter->ids = [7141];

try {
    $response = $client->orders->list($request);
} catch (HandlerException $exception) {
    echo 'Error while trying to prepare request: ' . $exception->getMessage();
    exit(-1);
} catch (HttpClientException $exception) {
    $prefix = 'Unknown error';

    if ($exception->getPrevious() instanceof NetworkExceptionInterface) {
        $prefix = 'Network error';
    }
    
    if ($exception->getPrevious() instanceof RequestExceptionInterface) {
        $prefix = 'Invalid request';
    }
    
    if ($exception->getPrevious() instanceof PsrClientExceptionInterface) {
        $prefix = 'HTTP client exception';
    }
    
    echo $prefix . ': ' . $exception->getMessage();

    exit(-1);
} catch (
    InvalidCredentialsException |
    AccessDeniedException |
    AccountDoesNotExistException |
    MissingCredentialsException |
    MissingParameterException $exception
    ) {
    echo $exception->getMessage();
    exit(-1);
} catch (ValidationException $exception) {
    echo 'Errors in fields:' . PHP_EOL;
    
    foreach ($exception->getErrorResponse()->errors as $field => $error) {
        printf(" - %s: %s\n", $field, $error);
    }
    
    exit(-1);
} catch (ApiExceptionInterface | ClientExceptionInterface $exception) {
    echo $exception; // Every ApiException and ClientException implements __toString() method
    exit(-1);
} catch (Throwable $throwable) {
    echo 'Unknown runtime exception: ' . $throwable->getMessage() . PHP_EOL;
    echo $throwable->getTraceAsString();
    exit(-1);
}

foreach ($response->orders as $order) {
    printf("Order ID: %d\n", $order->id);
    printf("First name: %s\n", $order->firstName);
    printf("Last name: %s\n", $order->lastName);
    printf("Patronymic: %s\n", $order->patronymic);
    printf("Phone #1: %s\n", $order->phone);
    printf("Phone #2: %s\n", $order->additionalPhone);
    printf("E-Mail: %s\n", $order->email);

    if ($order->customer instanceof CustomerCorporate) {
        echo "Customer type: corporate\n";
    } else {
        echo "Customer type: individual\n";
    }

    foreach ($order->items as $item) {
        echo PHP_EOL;

        printf("Product name: %s\n", $item->productName);
        printf("Quantity: %d\n", $item->quantity);
        printf("Initial price: %f\n", $item->initialPrice);
    }

    echo PHP_EOL;

    printf("Discount: %f\n", $order->discountManualAmount);
    printf("Total: %f\n", $order->totalSumm);

    echo PHP_EOL;
}
```
