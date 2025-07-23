<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Product
 */
class GetProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/3.0/products/{$this->id}";
	}


	/**
	 * @param string $id
	 */
	public function __construct(
		protected string $id,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
