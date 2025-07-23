<?php

namespace LightSpeed\XSeries\Requests\Consigments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List consignments
 */
class ListConsignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/consignments";
	}


	public function __construct()
	{
	}
}
