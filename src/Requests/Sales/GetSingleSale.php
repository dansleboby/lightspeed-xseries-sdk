<?php

namespace LightSpeed\XSeries\Requests\Sales;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single sale
 */
class GetSingleSale extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/sales/{$this->saleId}";
	}


	/**
	 * @param string $saleId
	 */
	public function __construct(
		protected string $saleId,
	) {
	}
}
