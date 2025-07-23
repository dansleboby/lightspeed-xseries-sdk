<?php

namespace LightSpeed\XSeries\Requests\Fulfillment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List sale fulfillments
 */
class ListSaleFulfillments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/sales/{$this->saleId}/fulfillments";
	}


	/**
	 * @param string $saleId
	 */
	public function __construct(
		protected string $saleId,
	) {
	}
}
