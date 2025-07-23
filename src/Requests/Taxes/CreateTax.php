<?php

namespace LightSpeed\XSeries\Requests\Taxes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a tax
 */
class CreateTax extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/taxes";
	}


	public function __construct()
	{
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
