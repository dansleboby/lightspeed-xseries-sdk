<?php

namespace LightSpeed\XSeries\Requests\StoreCredits;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Store credit report
 */
class StoreCreditReport extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/store_credits/report";
	}


	public function __construct()
	{
	}
}
