<?php

namespace LightSpeed\XSeries\Requests\Authorization;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Token request
 */
class TokenRequest extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/1.0/token";
	}


	public function __construct()
	{
	}
}
