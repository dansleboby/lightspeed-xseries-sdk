<?php

namespace LightSpeed\XSeries\Requests\Sales;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return a Sale
 */
class ReturnSale extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/sales/{$this->saleId}/actions/return";
	}


	/**
	 * @param string $saleId
	 */
	public function __construct(
		protected string $saleId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
