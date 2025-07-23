<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single product
 */
class GetSingleProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/products/{$this->productId}";
	}


	/**
	 * @param string $productId
	 */
	public function __construct(
		protected string $productId,
	) {
	}
}
