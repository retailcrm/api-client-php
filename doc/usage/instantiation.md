## Instantiation

There are several ways to instantiate the Client. The most simple of them is the `SimpleClientFactory`.

Let's take a look at the simplest example:

```php
use RetailCrm\Api\Factory\SimpleClientFactory;

$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'key');
```

> TODO: More info.
