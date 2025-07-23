<?php

namespace LightSpeed\XSeries\Requests\Suppliers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateSupplierByID
 */
class UpdateSupplierById extends Request
{
	protected Method $method = Method::PUT;


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
