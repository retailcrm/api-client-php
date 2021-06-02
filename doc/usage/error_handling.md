## Error handling

The API Client exceptions are hierarchical. It means that groups of exceptions can be caught using more generic exception types.
Let's take a look at the exceptions hierarchy:

- `ApiException` is an abstraction and will never be thrown by itself.
    - `AccessDeniedException` is thrown if the `Access denied.` error string is received from the API.
    - `AccountDoesNotExistException` is thrown if the RetailCRM account with a specified API URL does not exist.
    - `ApiErrorException` is thrown in case of any generic API error which is not recognized as a more specific type.
    - `InvalidCredentialsException` is thrown if the provided API key is not correct.
    - `MissingCredentialsException` is thrown if no API key was provided (this can happen if you initialize the Client without an authenticator).
    - `MissingParameterException` is thrown if `Parameter '*' is missing` error is returned from the API (`*` is any parameter name).
    - `ValidationException` is thrown if request validation is failed on the server-side (incorrect request data).
- `ClientException` is an abstraction and will never be thrown by itself.
    - `BuilderException` is thrown by any builder if something goes wrong.
    - `HandlerException` is thrown by the handlers in the request / response processing chain if they encountered an error.
    - `HttpClientException` is thrown if underlying HTTP client throws an exception.

`ApiException` implements `ApiExceptionInterface` and `ClientException` implements `ClientExceptionInterface`.
It means that you can catch any exception in the `ApiException` leaf using `ApiExceptionInterface` as an exception type.
Also, you can catch any exception in the `ClientException` leaf using the `ClientExceptionInterface` type.

`ClientExceptionInterface` and `ApiExceptionInterface` implements `__toString()`. The first one will return a string with an error
message and stack trace and the second one will print out the error message, stack trace, and error response data.

Let's take a look at the example:
```php
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');

try {
    $apiVersions = $client->api->apiVersions();
} catch (ApiExceptionInterface | ClientExceptionInterface $exception) {
    echo $exception;
    return;
}

echo 'Available API versions: ' . implode(', ', $apiVersions->versions);
```

All Client exceptions can be found in the `RetailCrm\Api\Exception` namespace. `ApiException` children reside in the `RetailCrm\Api\Exception\Api` namespace,
and `ClientException` children reside at the `RetailCrm\Api\Exception\Client` namespace.

It is recommended to look at the [complete error handling example](examples/complete_error_handling_example.md). 
The most useful case would be the error message generation for the client in your app, which can look like this:
- `InvalidCredentialsException` - show the `Invalid API key` message.
- `AccountDoesNotExistException` - show the `Incorrect RetailCRM URL` or `This RetailCRM instance does not exist` message.
- `AccessDeniedException` - show the `Please enable the /api/v5/... method for this key` message.
- and so on.
