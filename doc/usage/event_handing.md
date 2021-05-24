## Events

You can use PSR-14 compatible event dispatcher to receive events from the client.
It may be useful if you want to process certain events with the same logic without duplicating calls to such code.  
These events are provided by the library:
- `RetailCrm\Api\Event\SuccessRequestEvent` will be dispatched if request was successful.
- `RetailCrm\Api\Event\FailureRequestEvent` will be dispatched if request was not successful. It won't be dispatched if request cannot be formed at all.

> TODO: More info.
