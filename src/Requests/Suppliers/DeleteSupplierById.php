<?php

namespace LightSpeed\XSeries\Requests\Suppliers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSupplierById
 *
 * Deletes a supplier. If there are products associated with the supplier, the products will be
 * disassociated from the supplier.
 */
class DeleteSupplierById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/suppliers/{$this->supplierId}";
	}


	/**
	 * @param string $supplierId The supplier id.
	 */
	public function __construct(
		protected string $supplierId,
	) {
	}
}
