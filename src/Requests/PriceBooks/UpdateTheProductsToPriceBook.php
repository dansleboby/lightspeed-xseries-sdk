<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Update the products to a price book
 */
class UpdateTheProductsToPriceBook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
