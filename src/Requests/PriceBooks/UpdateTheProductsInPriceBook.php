<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update the products in a Price Book
 */
class UpdateTheProductsInPriceBook extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/price_books/{$this->priceBookId}/products";
	}


	/**
	 * @param string $priceBookId
	 * @param null|mixed $data
	 * @param null|mixed $version
	 */
	public function __construct(
		protected string $priceBookId,
		protected mixed $data = null,
		protected mixed $version = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['data' => $this->data, 'version' => $this->version]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
