<?php

namespace LightSpeed\XSeries\Requests\Consigments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List consignment totals
 */
class ListConsignmentTotals extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/consignments/{$this->consignmentId}/totals";
	}


	/**
	 * @param string $consignmentId
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
