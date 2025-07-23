<?php

namespace LightSpeed\XSeries\Requests\Brands;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single brand
 */
class GetSingleBrand extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/brands/{$this->brandId}";
	}


	/**
	 * @param string $brandId
	 */
	public function __construct(
		protected string $brandId,
	) {
	}
}
