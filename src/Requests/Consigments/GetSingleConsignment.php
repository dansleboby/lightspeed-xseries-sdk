<?php

namespace LightSpeed\XSeries\Requests\Consigments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single consignment
 */
class GetSingleConsignment extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/consignments/{$this->consignmentId}";
	}


	/**
	 * @param string $consignmentId
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
