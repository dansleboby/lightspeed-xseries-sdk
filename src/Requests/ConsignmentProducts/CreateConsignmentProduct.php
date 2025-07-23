<?php

namespace LightSpeed\XSeries\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateConsignmentProduct
 *
 * Add a product to the given consignment.
 *
 * If the type is SUPPLIER then:
 *
 * - Cannot add a product to a
 * `RECEIVED` or `CANCELLED` order
 * - Cannot add a composite product to the order
 * - If a received value
 * is provided for a consignment product for a SENT Supplier Order - the order will be automatically
 * marked as DISPATCHED
 *
 * If the type is OUTLET then:
 *
 * - If a cost value is not provided for a
 * consignment product on an OPEN Outlet order - the cost will be automatically populated after the
 * fact using the most accurate average cost of the product at the time of marking the consignment as
 * sent.
 */
class CreateConsignmentProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/products";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
