<?php

namespace LightSpeed\XSeries\Requests\ProductTypes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single product type
 */
class GetSingleProductType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/product_types/{$this->productTypeId}";
	}


	/**
	 * @param string $productTypeId
	 */
	public function __construct(
		protected string $productTypeId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
