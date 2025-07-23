<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List price book products per price book
 */
class ListPriceBookProductsPerPriceBook extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/price_books/{$this->priceBookId}/products";
	}


	/**
	 * @param string $priceBookId
	 */
	public function __construct(
		protected string $priceBookId,
	) {
	}
}
