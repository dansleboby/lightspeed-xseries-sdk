<?php

namespace LightSpeed\XSeries\Requests\Brands;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create brand
 */
class CreateBrand extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/brands";
	}


	/**
	 * @param null|mixed $name
	 */
	public function __construct(
		protected mixed $name = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['name' => $this->name]);
	}
}
