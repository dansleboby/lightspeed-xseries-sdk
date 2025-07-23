<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single price book
 */
class GetSinglePriceBook extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/3.0/price_books/{$this->id}";
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
