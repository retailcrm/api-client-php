### I've got error that looks like this: `Cannot deserialize body: Type "RetailCrm\Api\Model\Response\Api\ApiVersionsResponse" is not known.`

Run this command to fix the problem:

```sh
composer compile --all
```

The details about that error can be found in the [documentation](compilation_prompt.md).

### I've got "No Message Factories" error.

This means that PSR-17 implementation you have is not supported by the service discovery, therefore, API client cannot find proper factories.
In order to use your own PSR-17 implementation you need to use `ClientBuilder`. Also, you can just install supported implementation which is
much easier:
```sh
composer require nyholm/psr7
```

### I've got `Http\Discovery\Exception\DiscoveryFailedException` or any other error with message like "`Could not find resource using any discovery strategy`".

That's because you don't have any supported PSR-18, PSR-7 or PSR-17 implementation available. This usually happens if you do have any implementation for those
standards, but it's not supported by service discovery. You can fix this easily by installing supported implementations. We recommend using `symfony/http-client`
and `nyholm/psr7`. Install those using this command:
```sh
composer require nyholm/psr7 symfony/http-client
```

Alternatively, you can use `ClientBuilder` which allows you to pass your own HTTP client and message & URI factories.

### There are too many available exceptions! How do I catch them all?

Every exception in the library implements either `ApiExceptionInterface` or `ClientExceptionInterface`. First will be thrown in case of any
errors from the API, and the second will be thrown in case of any problems with the client or network itself. Concrete exception types are meant
to be used to determine what exactly gone wrong while sending a request.

Also, you can use PSR-14 compatible event dispatcher to handle some exceptions globally. The Client will send `FailureRequestEvent` in case of any exceptions.
You can call `FailureRequestEvent::suppressThrow()` to prevent client from throwing an exception.

### I can't test my app in the CI because Composer fails while installing dependencies.

That's because you should explicitly allow code generation for the library. Otherwise, Composer will ask you to run compilation task at runtime
which is not possible in the CI since it lacks the support for interactive input.

You can allow code generation tasks without interactive approval. Just add parameters from the JSON below to
the `"extra"` key of your project's `composer.json` file.
```json
{
    "compile-mode": "whitelist",
    "compile-whitelist": ["retailcrm/api-client-php"]
}
```

### How can I choose proper DTO class for my request?

Request DTO's can be found in the `RetailCrm\Api\Model\Request` namespace. They are separated by the API resource groups.
For example, requests for interaction with customer entities can be found in the `RetailCrm\Api\Model\Request\Customers` namespace
and requests for operations with the orders can be found in the `RetailCrm\Api\Model\Request\Orders` namespace. Every request method
defines it's input and output types. Also, you can choose correct type for child entities by looking at type annotations.
