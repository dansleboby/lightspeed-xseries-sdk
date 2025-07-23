<?php

namespace LightSpeed\XSeries\Requests\Brands;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateBrandById
 */
class UpdateBrandById extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/brands/{$this->brandId}";
	}


	/**
	 * @param string $brandId The brand id.
	 */
	public function __construct(
		protected string $brandId,
	) {
	}
}
