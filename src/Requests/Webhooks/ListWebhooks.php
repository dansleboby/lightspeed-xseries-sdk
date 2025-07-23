<?php

namespace LightSpeed\XSeries\Requests\Webhooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List Webhooks
 */
class ListWebhooks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/webhooks";
	}


	public function __construct()
	{
	}
}
