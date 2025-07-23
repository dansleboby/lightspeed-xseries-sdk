<?php

namespace LightSpeed\XSeries\Requests\Rules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List rules
 */
class ListRules extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/rules";
	}


	public function __construct()
	{
	}
}
