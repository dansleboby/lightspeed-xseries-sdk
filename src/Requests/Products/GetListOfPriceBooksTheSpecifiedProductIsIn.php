<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a list of price books the specified product is in
 */
class GetListOfPriceBooksTheSpecifiedProductIsIn extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/products/{$this->productId}/price_book_products";
	}


	/**
	 * @param string $productId
	 */
	public function __construct(
		protected string $productId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
