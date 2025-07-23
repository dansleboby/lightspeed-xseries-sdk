
# LightSpeed XSeries SDK

PHP SDK for the LightSpeed X‑Series API, generated with [Saloon](https://github.com/saloonphp/saloon).

## Requirements

- PHP 8.1 or higher  
- Composer 

## Installation

```bash
composer require dansleboby/lightspeed-xseries-sdk
````

## Quick Start

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use LightSpeed\XSeries\XSeriesSdk;
use LightSpeed\XSeries\Requests\Retailers\GetInformationAboutThisRetailer;

// 1. Instantiate the Connector
$connector = new XSeriesSdk('https://metrohub.retail.lightspeed.app/', "lsxs_at_W0DIeUeB5xjHID7oeKABRDEIw09dJI0z");

$request = new GetInformationAboutThisRetailer;

var_dump($connector->send($request)->body());
```

## Available Requests

All generated request classes live in `src/Requests`. They follow PSR‑4 under the namespace `LightSpeed\XSeries\Requests`. Common patterns include:

* `Get{Resource}Request`
* `List{Resource}Request`
* `Create{Resource}Request`
* `Update{Resource}Request`
* `Delete{Resource}Request`

Check the `src/Requests/` folder for a full list.

## Error Handling

All HTTP exceptions implement `Saloon\Exceptions\SaloonException`. You can catch and inspect:

```php
use Saloon\Exceptions\SaloonRequestException;

try {
    $response = $connector->send(new GetItemRequest([ /* ... */ ]));
} catch (SaloonRequestException $e) {
    echo $e->getMessage();
    // $e->response()->status(); // HTTP status code
}
```

## License

This SDK is licensed under the MIT License. See [LICENSE](LICENSE) for details.

