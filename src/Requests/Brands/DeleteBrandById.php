<?php

namespace LightSpeed\XSeries\Requests\Brands;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteBrandByID
 *
 * Deletes a brand. If there are products associated with the brand, the products will be disassociated
 * from the brand.
 */
class DeleteBrandById extends Request
{
	protected Method $method = Method::DELETE;


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
