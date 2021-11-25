# Custom API methods with DTO

This example demonstrates how you can use your custom serializer with custom DTOs to implement API methods. 

## How to run the project

1. Open `app.php` and change credentials and the site to your data.
2. Run these commands:
```sh
composer install
php app.php
```

You will see something like this:
```sh
Created customer using custom methods. ID: 5633
```

This means that the project works as expected.

## Navigation

- [`app.php`](app.php) - entrypoint, calls the custom method and outputs the response data.
- [`src/Component/Adapter/SymfonyToLiipAdapter.php`](src/Component/Adapter/SymfonyToLiipAdapter.php) - adapter for using `symfony/serializer` inside `FormEncoder` component.
- [`src/Component/CustomApiMethod.php`](src/Component/CustomApiMethod.php) - `CustomApiMethod` that uses `SerializerInterface` from `liip/serializer` and `FormEncoder`. This component will handle marshaling.
- [`src/Dto`](src/Dto) - data models used in the project.
- [`src/Factory/SerializerFactory.php`](src/Factory/SerializerFactory.php) - builds `symfony/serializer`'s serializer and wraps it into the `SymfonyToLiipAdapter`.
- [`src/Factory/ClientFactory.php`](src/Factory/ClientFactory.php) - custom client factory that register the custom API method.
