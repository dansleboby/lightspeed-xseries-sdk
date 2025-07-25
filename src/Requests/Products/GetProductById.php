<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetProductByID
 *
 * Returns a single product object with a given ID.
 */
class GetProductById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}";
	}


	/**
	 * @param string $productId The product id
	 */
	public function __construct(
		protected string $productId,
	) {
	}
}
