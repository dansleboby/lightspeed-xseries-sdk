<?php

namespace LightSpeed\XSeries\Requests\Registers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Close a single register
 */
class CloseSingleRegister extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/registers/{$this->registerId}/actions/close";
	}


	/**
	 * @param string $registerId
	 * @param null|mixed $payments
	 */
	public function __construct(
		protected string $registerId,
		protected mixed $payments = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['payments' => $this->payments]);
	}
}
