<?php

namespace LightSpeed\XSeries\Requests\Registers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Open a single register
 */
class OpenSingleRegister extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/registers/{$this->registerId}/actions/open";
	}


	/**
	 * @param string $registerId
	 * @param null|mixed $registerOpenTime
	 */
	public function __construct(
		protected string $registerId,
		protected mixed $registerOpenTime = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['register_open_time' => $this->registerOpenTime]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
