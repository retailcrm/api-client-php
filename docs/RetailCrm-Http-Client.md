RetailCrm\Http\Client
===============

HTTP client




* Class name: Client
* Namespace: RetailCrm\Http



Constants
----------


### METHOD_GET

```
const METHOD_GET = 'GET'
```





### METHOD_POST

```
const METHOD_POST = 'POST'
```





Properties
----------


### $url

```
protected mixed $url
```





* Visibility: **protected**


### $defaultParameters

```
protected mixed $defaultParameters
```





* Visibility: **protected**


Methods
-------


### \RetailCrm\Http\Client::__construct()

```
mixed RetailCrm\Http\Client::\RetailCrm\Http\Client::__construct()($url, array $defaultParameters)
```





* Visibility: **public**

#### Arguments

* $url **mixed**
* $defaultParameters **array**



### \RetailCrm\Http\Client::makeRequest()

```
\RetailCrm\Response\ApiResponse RetailCrm\Http\Client::\RetailCrm\Http\Client::makeRequest()(string $path, string $method, array $parameters, $timeout)
```

Make HTTP request



* Visibility: **public**

#### Arguments

* $path **string**
* $method **string** - &lt;p&gt;(default: &#039;GET&#039;)&lt;/p&gt;
* $parameters **array** - &lt;p&gt;(default: array())&lt;/p&gt;
* $timeout **mixed**


