<?php

namespace LightSpeed\XSeries\Requests\Registers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all the payments data associated with a single register
 */
class GetAllThePaymentsDataAssociatedWithSingleRegister extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/registers/{$this->registerId}/payments_summary";
	}


	/**
	 * @param string $registerId
	 */
	public function __construct(
		protected string $registerId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
