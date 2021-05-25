## Error handling

The API Client exceptions are hierarchical. It means that groups of exceptions can be caught using more generic exception types. 
Let's take a look at the exceptions hierarchy:

- `ApiException` is an abstraction and will never be thrown by itself.
  - `AccessDeniedException` is thrown if the `Access denied.` error string is received from the api.
  - `AccountDoesNotExistException` is thrown if the RetailCRM account with specified API URL does not exist.
  - `ApiErrorException` is thrown in case of any generic API error which is not recognized as more specific type.
  - `InvalidCredentialsException` is thrown if provided API key is not correct.
  - `MissingCredentialsException` is thrown if no API key was provided (this can happen if you initialize the Client without an authenticator).
  - `MissingParameterException` is thrown if `Parameter '*' is missing` error is returned from the API (`*` is any parameter name).
  - `ValidationException` is thrown if request validation is failed on the server side (incorrect request data).
- `ClientException` is an abstraction and will never be thrown by itself.
  - `BuilderException` is thrown by any builder if something goes wrong.
  - `HandlerException` is thrown by the handlers in the request / response processing chain if they encountered an error.
  - `HttpClientException` is thrown if underlying HTTP client throws an exception.

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
