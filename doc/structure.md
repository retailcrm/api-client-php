## Client structure

The client is separated into several resource groups, all of which are accessible through the Client's public properties. Each resource group is responsible for the corresponding API section. It is much easier to understand how the Client works by learning its design principles.

### Design principles

The general principles of the Client design are:
1. The Client itself doesn't contain any API methods implementations.
1. ResourceGroups implements all API methods.
1. Every method can accept from zero to several arguments.
1. URI path arguments (not the query string ones) are always passed as separate method arguments.
1. Query parameters are always passed in the form of the Request model. The same principle applies to the POST form data.
1. If the Request contains only one parameter - it'll probably accept it through the constructor. This doesn't apply to the filter requests, which don't have constructors at all.
1. All DTO's you'll ever need can be found in the `RetailCrm\Api\Model` namespace.
1. Every method has an example of the usage in its DocBlock. Yes, all of them. You can learn how to use any of the methods just by looking at the DocBlock help tooltip provided by your IDE. If it's not provided by your IDE - you'll need to look up how to configure it. It'll ease your work with this (and any other) library a lot.

### Resource groups

The resource groups list into which client is separated:

* `api`
* `costs`
* `customFields`
* `customers`
* `customersCorporate`
* `delivery`
* `files`
* `integration`
* `loyalty`
* `orders`
* `packs`
* `payments`
* `references`
* `segments`
* `settings`
* `store`
* `tasks`
* `telephony`
* `users`
* `verification`
* `statistics`

Every group implements corresponding API documentation block:
* [English](https://docs.retailcrm.pro/Developers/API/APIVersions/APIv5)
* [Русский](https://docs.retailcrm.ru/Developers/API/APIVersions/APIv5)
