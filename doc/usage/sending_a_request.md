## Sending a request

You need three things to send a request:
1. [Resource group, DTOs, and method](#choosing-correct-resource-group-dtos-and-method)
2. [Send a request](#sending-a-request)
3. [Deal with exceptions](#dealing-with-exceptions)

### Choosing correct resource group, DTOs, and method

First, take a look at the API itself:
* [English](https://docs.retailcrm.pro/Developers/API/APIVersions/APIv5)
* [Русский](https://docs.retailcrm.ru/Developers/API/APIVersions/APIv5)

Choose a method you want to use. Which one is yours depend on the task you want to perform.

Then take look at the API again. It consists of several blocks, each block is responsible for a specific set of features. 
The Client itself is also separated to those blocks or resource groups (full list of them can be found [here](../structure.md#resource-groups)).

Each resource group corresponds to an equal block in the documentation. For example. `customersCorporate` resource group implements methods 
in the _Corporate customers_ API block (рус. _Корпоративные клиенты_).

Just look at the method you want to use and pick a proper resource group. That's it. Let's move on to the DTOs.

Choosing proper DTOs is also easy. Each client method defines expected parameter types. If the method doesn't have any 
parameters, then the API method is also doesn't require any parameters and can be just called. The most noteworthy would be 
`/api/api-versions` and `/api/credentials` methods. They can be called from the Client instance like that:

```php
use RetailCrm\Api\Factory\SimpleClientFactory;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'key');
$client->api->apiVersions();
$client->api->credentials();
```

The majority of the methods will require some parameters. Usually it's a request DTO, some path parameters (like customer id) 
or both. For example, `/api/v5/customers/create` method requires request DTO, `/api/v5/customers/{externalId}` requires 
customer ID and `/api/v5/customers/{externalId}/edit` requires both.

The corresponding methods on the client instance are:

| API method                            | Client instance method       |
| ------------------------------------- | ---------------------------- |
| `/api/v5/customers/create`            | `$client->customers->create` |
| `/api/v5/customers/{externalId}`      | `$client->customers->get`    |
| `/api/v5/customers/{externalId}/edit` | `$client->customers->edit`   |

Look at the method definitions (they have also shown by the IDE):

```php
public function create(CustomersCreateRequest $request): IdResponse;
public function get($identifier, ?BySiteRequest $request = null): CustomersGetResponse;
public function edit($identifier, CustomersEditRequest $request): CustomersEditResponse;
```

Just use types from the type hints and everything will work. The DTO's fields also have type declarations but in the form 
of the `@var` annotation tags. That's how you can choose the correct type for the DTO fields.

### Sending a request

Using information from the previous article you can easily construct a request.  

This request will create a new customer.

```php
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Request\Customers\CustomersCreateRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'key');
$request = new CustomersCreateRequest();

$request->customer = new Customer();
$request->customer->email = 'test@example.com';
$request->site = 'site';

$response = $client->customers->create($request);
```

This one will fetch specific customer from the API by the ID and site.

```php
use RetailCrm\Api\Enum\ByIdentifier;use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Request\BySiteRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'key');
$response = $client->customers->get(1, new BySiteRequest(ByIdentifier::ID, 'site'));

echo $response->customer->email;
```

And this one will edit specific customer:

```php
use RetailCrm\Api\Enum\ByIdentifier;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Model\Entity\Customers\Customer;
use RetailCrm\Api\Model\Request\Customers\CustomersEditRequest;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'key');
$request = new CustomersEditRequest();

$request->customer = new Customer();
$request->customer->email = 'test@example.com';
$request->site = 'site';
$request->by = ByIdentifier::ID;

$response = $client->customers->edit(1, $request);

echo "Edited customer ID: " . $response->id;
```

### Dealing with exceptions

What will happen if an API error is returned for the one of requests above? Or the network is not working at all?
An exception will happen.

There are two main exception types:
* `RetailCrm\Api\Interfaces\ApiExceptionInterface` is thrown if API returned an error.
* `RetailCrm\Api\Interfaces\ClientExceptionInterface` is thrown if the request cannot be sent due to an internal error.

You can use those like this:

```php
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'key');

try {
    $response = $client->customers->list();
} catch (ApiExceptionInterface $exception) {
    echo $exception;
} catch (ClientExceptionInterface $exception) {
    echo 'Client error: ' . $exception->getMessage();
}

if (isset($response)) {
    echo "Customers: " . print_r($response->customers, true);
}
```

More information about exceptions can be found on the [error handling](error_handling.md) page.
