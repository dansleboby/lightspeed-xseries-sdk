<?php

namespace LightSpeed\XSeries\Requests\Suppliers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single supplier
 */
class GetSingleSupplier extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/suppliers/{$this->supplierId}";
	}


	/**
	 * @param string $supplierId
	 */
	public function __construct(
		protected string $supplierId,
	) {
	}
}
