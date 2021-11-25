## Implementing custom API methods

You can use this feature if you need to group multiple API calls, or return something custom - not the API response as-is,
or, for example, to use new API methods without waiting for the implementation. For all of those cases, we provide a special
resource group in the client that will make it easy to implement a custom API method.

The main limitation of this mechanism is the lack of DTO. You will be limited to arrays inside custom methods. It is 
_possible_ to use custom DTO's for the custom methods, but it is a little tricky - check the bottom of this page for the example.

Let's imagine that we have a special method with this route: `/api/v5/dialogs`. This method returns a list of the dialogs present in the system. 
We cannot use it directly because it is not implemented in the client. However, we can implement it by ourselves using custom methods. 
It will look like this:

```php
use RetailCrm\Api\Component\CustomApiMethod;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;

$client = SimpleClientFactory::createClient('https://test.simla.io', 'key');
$client->customMethods->register('dialogs', new CustomApiMethod(RequestMethod::GET, 'dialogs'));

try {
    $dialogs = $client->customMethods->call('dialogs');
} catch (ApiExceptionInterface $exception) {
    echo sprintf(
        'Error from RetailCRM API (status code: %d): %s',
        $exception->getStatusCode(),
        $exception->getMessage()
    );

    if (count($exception->getErrorResponse()->errors) > 0) {
        echo PHP_EOL . 'Errors: ' . implode(', ', $exception->getErrorResponse()->errors);
    }

    return;
}

echo 'Dialogs: ' . print_r($dialogs['dialogs'], true);
```

First, we need to register the custom method in the client. To do this we must give our method a name and an implementation.
The name will be used to call the method later using `call()` and the implementation is just a callable with the three
parameters: `RequestSenderInterface`, data array, and the context. Let's take a look at all three.

1. `RequestSenderInterface` is implemented by the `RequestSender` and contains three methods: `send`, `route` and `host`.
   `send` is used to send the request, `route` will append the base URL to your method name, and the latter, `host`, will return
   hostname from the base URL.
2. The data array contains any data that has been provided to the callable during the method call. It will be encoded as
   a query string and stored either as the URL params or as the form body (query string is used for GET and DELETE requests).
3. The context contains any information provided to the callable during the method call. It is not checked by the client.
   However, it is always must be of array type.

As you can see, we're using `CustomApiMethod` as a callable in the example. The `CustomApiMethod` is a simple invokable
wrapper that can be used to simplify the registration of the new methods. The boilerplate code in the previous example is
already implemented inside the `CustomApiMethod` component.

It is easier to understand how the callable should work and how the `CustomApiMethod` works by looking at the registration example.
It works exactly like the previous example, but without the `CustomApiMethod` component:

```php
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Interfaces\RequestSenderInterface;

$client->customMethods->register('dialogs', function (RequestSenderInterface $sender, $data, array $context) {
    return $sender->send(RequestMethod::GET, $sender->route('dialogs'), $data);
});
```

The data here is not defined as array because it can be anything you like. You can use any serializer to serialize the data 
and deserialize the response. `CustomApiMethod` only supports array out-of-box, but your handlers can utilize any 
data types.

The base URL inside the client is always represented as a URL with the version suffix. It should be always kept in mind
while using the `route` method:

```php
// This code is being executed inside the custom method callable.
// Base URL is http://test.simla.io/api/v5

$settingsRoute = $sender->route('settings');
$host = $sender->host();

echo $settingsRoute; // prints "https://test.simla.io/api/v5/settings" - the slash is inserted by the route() method.
echo $host;          // prints "test.simla.io"
```

Any registered custom method can be called using the `__call` magic method:

```php
// Both calls below works the same.

$client->customMethods->call('dialogs', ['param' => 'value'], ['contextParam' => 'contextValue']);
$client->customMethods->dialogs(['param' => 'value'], ['contextParam' => 'contextValue']);
```

The last notable difference from the regular methods lies inside events. You won't be able to get request or response models
from the events, but you can extract the response array using the `getResponseArray()` method.

## Using DTOs with the custom methods

You can use DTOs with the custom methods. To do that you just need to serialize the request models inside the method callback
before sending the request and deserialize the response before returning it. We already made a great example project that
demonstrates the DTO usage alongside custom methods.

[**DTOs with the custom methods - sample project**](examples/custom-api-methods-with-dto)
