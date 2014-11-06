RetailCrm\ApiClient
===============

retailCRM API client class




* Class name: ApiClient
* Namespace: RetailCrm



Constants
----------


### VERSION

```
const VERSION = 'v3'
```





Properties
----------


### $client

```
protected mixed $client
```





* Visibility: **protected**


Methods
-------


### \RetailCrm\ApiClient::__construct()

```
void RetailCrm\ApiClient::\RetailCrm\ApiClient::__construct()(string $url, string $apiKey)
```

Client creating



* Visibility: **public**

#### Arguments

* $url **string**
* $apiKey **string**



### \RetailCrm\ApiClient::ordersCreate()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::ordersCreate()(array $order)
```

Create a order



* Visibility: **public**

#### Arguments

* $order **array**



### \RetailCrm\ApiClient::ordersEdit()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::ordersEdit()(array $order, $by)
```

Edit a order



* Visibility: **public**

#### Arguments

* $order **array**
* $by **mixed**



### \RetailCrm\ApiClient::ordersUpload()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::ordersUpload()(array $orders)
```

Upload array of the orders



* Visibility: **public**

#### Arguments

* $orders **array**



### \RetailCrm\ApiClient::ordersGet()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::ordersGet()(string $id, string $by)
```

Get order by id or externalId



* Visibility: **public**

#### Arguments

* $id **string**
* $by **string** - &lt;p&gt;(default: &#039;externalId&#039;)&lt;/p&gt;



### \RetailCrm\ApiClient::ordersHistory()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::ordersHistory()(\DateTime $startDate, \DateTime $endDate, integer $limit, integer $offset)
```

Returns a orders history



* Visibility: **public**

#### Arguments

* $startDate **DateTime** - &lt;p&gt;(default: null)&lt;/p&gt;
* $endDate **DateTime** - &lt;p&gt;(default: null)&lt;/p&gt;
* $limit **integer** - &lt;p&gt;(default: 100)&lt;/p&gt;
* $offset **integer** - &lt;p&gt;(default: 0)&lt;/p&gt;



### \RetailCrm\ApiClient::ordersList()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::ordersList()(array $filter, integer $page, integer $limit)
```

Returns filtered orders list



* Visibility: **public**

#### Arguments

* $filter **array** - &lt;p&gt;(default: array())&lt;/p&gt;
* $page **integer** - &lt;p&gt;(default: null)&lt;/p&gt;
* $limit **integer** - &lt;p&gt;(default: null)&lt;/p&gt;



### \RetailCrm\ApiClient::ordersFixExternalIds()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::ordersFixExternalIds()(array $ids)
```

Save order IDs' (id and externalId) association in the CRM



* Visibility: **public**

#### Arguments

* $ids **array**



### \RetailCrm\ApiClient::customersCreate()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::customersCreate()(array $customer)
```

Create a customer



* Visibility: **public**

#### Arguments

* $customer **array**



### \RetailCrm\ApiClient::customersEdit()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::customersEdit()(array $customer, $by)
```

Edit a customer



* Visibility: **public**

#### Arguments

* $customer **array**
* $by **mixed**



### \RetailCrm\ApiClient::customersUpload()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::customersUpload()(array $customers)
```

Upload array of the customers



* Visibility: **public**

#### Arguments

* $customers **array**



### \RetailCrm\ApiClient::customersGet()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::customersGet()(string $id, string $by)
```

Get customer by id or externalId



* Visibility: **public**

#### Arguments

* $id **string**
* $by **string** - &lt;p&gt;(default: &#039;externalId&#039;)&lt;/p&gt;



### \RetailCrm\ApiClient::customersList()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::customersList()(array $filter, integer $page, integer $limit)
```

Returns filtered customers list



* Visibility: **public**

#### Arguments

* $filter **array** - &lt;p&gt;(default: array())&lt;/p&gt;
* $page **integer** - &lt;p&gt;(default: null)&lt;/p&gt;
* $limit **integer** - &lt;p&gt;(default: null)&lt;/p&gt;



### \RetailCrm\ApiClient::customersFixExternalIds()

```
\RetailCrm\Response\ApiResponse RetailCrm\ApiClient::\RetailCrm\ApiClient::customersFixExternalIds()(array $ids)
```

Save customer IDs' (id and externalId) association in the CRM



* Visibility: **public**

#### Arguments

* $ids **array**



### \RetailCrm\ApiClient::checkIdParameter()

```
boolean RetailCrm\ApiClient::\RetailCrm\ApiClient::checkIdParameter()(string $by)
```

Check ID parameter



* Visibility: **protected**

#### Arguments

* $by **string**


