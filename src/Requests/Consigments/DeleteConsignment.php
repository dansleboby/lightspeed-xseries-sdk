<?php

namespace LightSpeed\XSeries\Requests\Consigments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a consignment
 */
class DeleteConsignment extends Request
{
	protected Method $method = Method::DELETE;


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
}
