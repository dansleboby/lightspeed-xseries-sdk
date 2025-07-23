<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a product
 */
class UpdateProduct extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.1/products/{$this->productId}";
	}


	/**
	 * @param string $productId
	 * @param null|mixed $common
	 * @param null|mixed $details
	 */
	public function __construct(
		protected string $productId,
		protected mixed $common = null,
		protected mixed $details = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['common' => $this->common, 'details' => $this->details]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
