In this example we will fetch all history entries for 1 month from the API.

```php
use RetailCrm\Api\Enum\PaginationLimit;
use RetailCrm\Api\Factory\SimpleClientFactory;
use RetailCrm\Api\Interfaces\ApiExceptionInterface;
use RetailCrm\Api\Interfaces\ClientExceptionInterface;
use RetailCrm\Api\Model\Filter\Orders\OrderHistoryFilterV4Type;
use RetailCrm\Api\Model\Request\Orders\OrdersHistoryRequest;

$history = [];
$client = SimpleClientFactory::createClient('https://test.retailcrm.pro', 'apiKey');
$request = new OrdersHistoryRequest();
$request->filter = new OrderHistoryFilterV4Type();
$request->limit = PaginationLimit::LIMIT_100;
$request->filter->startDate = (new DateTime())->sub(new DateInterval('P1M')); // History for 1 month by default.

do {
    time_nanosleep(0, 100000000); // 10 requests per second

    try {
        $response = $client->orders->history($request);
    } catch (ClientExceptionInterface | ApiExceptionInterface $exception) {
        echo $exception;
        break;
    }

    $history = array_merge($history, $response->history);
    $request->filter->startDate = null;
    $request->filter->sinceId = end($response->history)->id;
} while ($response->pagination->currentPage < $response->pagination->totalPageCount);

// Here you can process all history entries in the `$history` variable.
```
