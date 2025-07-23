<?php

namespace LightSpeed\XSeries\Requests\Registers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single register
 */
class GetSingleRegister extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/registers/{$this->registerId}";
	}


	/**
	 * @param string $registerId
	 */
	public function __construct(
		protected string $registerId,
	) {
	}
}
