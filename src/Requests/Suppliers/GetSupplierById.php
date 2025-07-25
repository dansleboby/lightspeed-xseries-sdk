<?php

namespace LightSpeed\XSeries\Requests\Suppliers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetSupplierByID
 *
 * Returns a single supplier with a given ID.
 */
class GetSupplierById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/suppliers/{$this->supplierId}";
	}


	/**
	 * @param string $supplierId The supplier id
	 */
	public function __construct(
		protected string $supplierId,
	) {
	}
}
