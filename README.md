# Lightspeed Retail (X-Series) API v2.0 - PHP SDK

This repository contains a PHP SDK for interacting with version 2.0 of the Lightspeed Retail (X-Series) API. It is built using the excellent [Saloon](https://github.com/saloonphp/saloon) library to provide a simple and expressive way to make API requests.

---

### ⚠️ Disclaimer ⚠️

This SDK is **not officially created or supported by Lightspeed**. It is an independent, community-driven project.

Furthermore, this software is currently in an **alpha stage**. This means it may contain bugs, and breaking changes can be introduced at any time. Please use it at your own risk and test thoroughly before using it in a production environment.

---

## Requirements

- PHP 8.1 or higher
- [Composer](https://getcomposer.org/)

## Installation

You can install the package via Composer:

```bash
composer require dansleboby/lightspeed-xseries-sdk
```

## Quick Start

Here is a basic example of how to list sales.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use LightSpeed\XSeries\XSeriesSdk;
use LightSpeed\XSeries\Requests\Retailers\GetRetailer;

// 1. Instantiate the Connector
$connector = new XSeriesSdk('domain_prefix', "token");

$request = new GetRetailer;

try {
	var_dump($connector->send($request)
					   ->body());
} catch(\Saloon\Exceptions\Request\FatalRequestException $e) {
	die("Fatal error: " . $e->getMessage());
} catch(\Saloon\Exceptions\Request\RequestException $e) {
	die("Request error: " . $e->getMessage());
}
```

## Available Endpoints

All available API requests are located in the `src/Requests` directory and are organized by resource (e.g., `Products`, `Customers`, `Sales`). They generally follow a consistent naming pattern:

*   `List{Resource}`
*   `Get{Resource}ById`
*   `Create{Resource}`
*   `Update{Resource}`
*   `Delete{Resource}`

Please browse the `src/Requests` directory for a complete list of available actions.

## Lightspeed API Documentation

For detailed information about specific API endpoints, parameters, and data structures, please refer to the official Lightspeed X-Series API documentation:
- [Lightspeed X-Series API v2.0 official](https://x-series-api.lightspeedhq.com/reference)
- [Lightspeed X-Series API v2.0 openapi](https://x-series-api.lightspeedhq.com/openapi)

## License

This SDK is open-source software licensed under the [MIT License](LICENSE).