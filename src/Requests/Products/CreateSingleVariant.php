<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a single variant
 */
class CreateSingleVariant extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.1/products";
	}


	/**
	 * @param null|mixed $common
	 * @param null|mixed $details
	 */
	public function __construct(
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
