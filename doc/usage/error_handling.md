## Error handling

The API Client exceptions are hierarchical. It means that groups of exceptions can be caught using more generic exception types. 
Let's take a look at the exceptions hierarchy:

- `ApiException`
  - `AccessDeniedException`
  - `AccountDoesNotExistException`
  - `ApiErrorException`
  - `InvalidCredentialsException`
  - `MissingCredentialsException`
  - `MissingParameterException`
  - `ValidationException`
- `ClientException`
  - `BuilderException`
  - `HandlerException`
  - `HttpClientException`

`ApiException` implements `ApiExceptionInterface` and `ClientException` implements `ClientExceptionInterface`. 
It means that you can catch any exception in the `ApiException` leaf using `ApiExceptionInterface` as an exception type. 
Also, you can catch any exception in `ClientException` leaf using `ClientExceptionInterface` type.  

Let's take a look at the example:
```php
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

try {
    $apiVersions = $client->api->apiVersions();
} catch (ApiExceptionInterface $exception) {
    echo $exception;
    return;
} catch (ClientExceptionInterface $exception) {
    echo $exception->getMessage();
    return;
}

echo 'Available API versions: ' . implode(', ', $apiVersions->versions);
```

All Client exceptions can be found in the `RetailCrm\Api\Exception` namespace. `ApiException` children reside in the `RetailCrm\Api\Exception\Api` namespace, 
and `ClientException` children reside at the `RetailCrm\Api\Exception\Client` namespace.
