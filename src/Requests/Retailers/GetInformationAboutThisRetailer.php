<?php

namespace LightSpeed\XSeries\Requests\Retailers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get information about this retailer
 */
class GetInformationAboutThisRetailer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/retailer";
	}


	public function __construct()
	{
	}
}
