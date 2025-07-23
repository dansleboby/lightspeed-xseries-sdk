<?php

namespace LightSpeed\XSeries\Requests\ServiceOrders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get service
 */
class GetService extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/services/{$this->serviceId}";
	}


	/**
	 * @param string $serviceId
	 */
	public function __construct(
		protected string $serviceId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
