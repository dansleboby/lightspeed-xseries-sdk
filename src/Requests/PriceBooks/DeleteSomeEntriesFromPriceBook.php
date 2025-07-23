<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete some entries from a price book
 */
class DeleteSomeEntriesFromPriceBook extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/price_books/{$this->priceBookId}/products";
	}


	/**
	 * @param string $priceBookId
	 * @param null|mixed $data
	 */
	public function __construct(
		protected string $priceBookId,
		protected mixed $data = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['data' => $this->data]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
