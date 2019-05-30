# CM.com TextClient Service Provider
Service provider to inject the `CMText\TextClient`


### requirements

- laravel 5


## setup

- Load this package in to your project
```composer
composer require hexonthebeach/laravel-cmtext-provider
```

- Publish the enclosed config to **config/cmtext.php**
```php
php artisan vendor:publish "hexonthebeach\LaravelCMTextProvider\CMTextProvider"
```

- Add `CM_API_KEY` to the project **.env** file, the value should be your Api Key

- Finally add this service provider to the list of providers in the **config/app.php** file
```php
'providers' => [
    ... ,
    hexonthebeach\LaravelCMTextProvider\CMTextProvider::class,
],
```

## code example
```php
<?php namespace App\Http\Controllers;

use CMText\TextClient;

class CMTextController extends Controller
{
    public function index(TextClient $textClient)
    {
        $textClient->SendMessage( ... );
    }
}
```
