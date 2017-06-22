# PHP-клиент для retailCRM API

PHP-клиент для работы с [retailCRM API](http://www.retailcrm.ru/docs/Developers/ApiVersion5).

Рекомендуем обращаться к [документации](http://retailcrm.github.io/api-client-php) по библиотеке, в частности по классу [RetailCrm\ApiClient](http://retailcrm.github.io/api-client-php/class-RetailCrm.ApiClient.html).

## Обязательные требования

* PHP версии 5.4 и выше
* PHP-расширение cURL

## Установка

1) Установите [composer](https://getcomposer.org/download/)

2) Выполните в папке проекта:
```bash
composer require retailcrm/api-client-php ~5.0
```

В конфиг `composer.json` вашего проекта будет добавлена библиотека `retailcrm/api-client-php`, которая установится в папку `vendor/`. При отсутствии файла конфига или папки с вендорами они будут созданы.

В случае, если до этого в вашем проекте не использовался `composer`, подключите файл автозагрузки вендоров. Для этого укажите в коде проекта:
```php
require 'path/to/vendor/autoload.php';
```

## Примеры использования

### Получение информации о заказе
```php
$client = new \RetailCrm\ApiClient(
    'https://demo.retailcrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH',
    \RetailCrm\ApiClient::V5
);

try {
    $response = $client-request->ordersGet('M-2342');
} catch (\RetailCrm\Exception\CurlException $e) {
    echo "Сетевые проблемы. Ошибка подключения к retailCRM: " . $e->getMessage();
}

if ($response->isSuccessful()) {
    echo $response->order['totalSumm'];
    // или $response['order']['totalSumm'];
    // или
    //    $order = $response->getOrder();
    //    $order['totalSumm'];
} else {
    echo sprintf(
        "Ошибка получения информации о заказа: [Статус HTTP-ответа %s] %s",
        $response->getStatusCode(),
        $response->getErrorMsg()
    );

    // получить детализацию ошибок
    //if (isset($response['errors'])) {
    //    print_r($response['errors']);
    //}
}
```

### Создание заказа
```php

$client = new \RetailCrm\ApiClient(
    'https://demo.retailcrm.ru',
    'T9DMPvuNt7FQJMszHUdG8Fkt6xHsqngH',
    \RetailCrm\ApiClient::V4
);

try {
    $response = $client-request->ordersCreate(array(
        'externalId' => 'some-shop-order-id',
        'firstName' => 'Vasily',
        'lastName' => 'Pupkin',
        'items' => array(
            //...
        ),
        'delivery' => array(
            'code' => 'russian-post',
        )
    ));
} catch (\RetailCrm\Exception\CurlException $e) {
    echo "Сетевые проблемы. Ошибка подключения к retailCRM: " . $e->getMessage();
}

if ($response->isSuccessful() && 201 === $response->getStatusCode()) {
    echo 'Заказ успешно создан. ID заказа в retailCRM = ' . $response->id;
        // или $response['id'];
        // или $response->getId();
} else {
    echo sprintf(
        "Ошибка создания заказа: [Статус HTTP-ответа %s] %s",
        $response->getStatusCode(),
        $response->getErrorMsg()
    );

    // получить детализацию ошибок
    //if (isset($response['errors'])) {
    //    print_r($response['errors']);
    //}
}
```
