<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a price book
 */
class DeletePriceBook extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/price_books/{$this->priceBookId}";
	}


	/**
	 * @param string $priceBookId
	 */
	public function __construct(
		protected string $priceBookId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
