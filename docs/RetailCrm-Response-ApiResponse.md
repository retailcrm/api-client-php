RetailCrm\Response\ApiResponse
===============

Response from retailCRM API




* Class name: ApiResponse
* Namespace: RetailCrm\Response
* This class implements: ArrayAccess




Properties
----------


### $statusCode

```
protected mixed $statusCode
```





* Visibility: **protected**


### $response

```
protected mixed $response
```





* Visibility: **protected**


Methods
-------


### \RetailCrm\Response\ApiResponse::__construct()

```
mixed RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::__construct()($statusCode, $responseBody)
```





* Visibility: **public**

#### Arguments

* $statusCode **mixed**
* $responseBody **mixed**



### \RetailCrm\Response\ApiResponse::getStatusCode()

```
integer RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::getStatusCode()()
```

Return HTTP response status code



* Visibility: **public**



### \RetailCrm\Response\ApiResponse::isSuccessful()

```
boolean RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::isSuccessful()()
```

HTTP request was successful



* Visibility: **public**



### \RetailCrm\Response\ApiResponse::__call()

```
mixed RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::__call()(string $name, $arguments)
```

Allow to access for the property throw class method



* Visibility: **public**

#### Arguments

* $name **string**
* $arguments **mixed**



### \RetailCrm\Response\ApiResponse::__get()

```
mixed RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::__get()(string $name)
```

Allow to access for the property throw object property



* Visibility: **public**

#### Arguments

* $name **string**



### \RetailCrm\Response\ApiResponse::offsetSet()

```
mixed RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::offsetSet()($offset, $value)
```





* Visibility: **public**

#### Arguments

* $offset **mixed**
* $value **mixed**



### \RetailCrm\Response\ApiResponse::offsetUnset()

```
mixed RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::offsetUnset()($offset)
```





* Visibility: **public**

#### Arguments

* $offset **mixed**



### \RetailCrm\Response\ApiResponse::offsetExists()

```
mixed RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::offsetExists()($offset)
```





* Visibility: **public**

#### Arguments

* $offset **mixed**



### \RetailCrm\Response\ApiResponse::offsetGet()

```
mixed RetailCrm\Response\ApiResponse::\RetailCrm\Response\ApiResponse::offsetGet()($offset)
```





* Visibility: **public**

#### Arguments

* $offset **mixed**


