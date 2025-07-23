<?php

namespace LightSpeed\XSeries\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateOrUpdateConsignmentProducts
 *
 * Add or update the products in a consignment in bulk.
 *
 * **Note**: Must include either count or
 * received for each product.
 *
 * **Note**: It is not recommended to update more than 500 products at a
 * time, as this may lead to server timeouts.
 *
 * **Note**:
 *
 * If the type is SUPPLIER then:
 *
 * - Cannot add
 * a composite product by this api
 * - Cannot update products if the consignment has a status of RECEIVED
 * or CANCELLED
 * - If status is OPEN or SENT, the count value will be accumulated
 * - If status is
 * DISPATCHED, the received quantity will be accumulated
 * - If status is OPEN, SENT or DISPATCHED, the
 * cost will be updated
 * - If a received field is provided for consignment products in an OPEN or SENT
 * Supplier Order - the order will be automatically marked as DISPATCHED. Remove the received field if
 * you don't intend to dispatch the OPEN or SENT purchase order
 */
class CreateOrUpdateConsignmentProducts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/bulk";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
