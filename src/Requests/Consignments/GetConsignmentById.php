<?php

namespace LightSpeed\XSeries\Requests\Consignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetConsignmentByID
 *
 * Returns a single consignment with the requested ID.
 */
class GetConsignmentById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
