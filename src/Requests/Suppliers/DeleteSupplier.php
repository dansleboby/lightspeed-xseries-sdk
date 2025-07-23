<?php

namespace LightSpeed\XSeries\Requests\Suppliers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a supplier
 */
class DeleteSupplier extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/supplier/{$this->supplierId}";
	}


	/**
	 * @param string $supplierId
	 */
	public function __construct(
		protected string $supplierId,
	) {
	}
}
