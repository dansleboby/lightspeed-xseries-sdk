<?php

namespace LightSpeed\XSeries\Requests\Fulfillment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetFulfillmentsBySaleID
 *
 * Returns a list of fulfillments for a given sale.
 */
class GetFulfillmentsBySaleId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sales/{$this->saleId}/fulfillments";
	}


	/**
	 * @param string $saleId The sale id
	 */
	public function __construct(
		protected string $saleId,
	) {
	}
}
