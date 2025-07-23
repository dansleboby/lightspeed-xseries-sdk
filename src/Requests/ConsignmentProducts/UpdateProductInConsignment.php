<?php

namespace LightSpeed\XSeries\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateProductInConsignment
 *
 * Updates the specific product within the consignment.
 *
 * **Notes**:
 *
 * - If the type is SUPPLIER then:
 *
 * * If status is OPEN or SENT, the count value will be updated
 *   * If status is DISPATCHED, the
 * received quantity will be updated
 *   * If status is OPEN, SENT or DISPATCHED, the cost can be
 * updated
 *   * Cannot update a product in RECEIVED or CANCELLED status
 *   * Any updates to the received
 * quantity field on a product in a `SENT` consignment, will set the consignment status to
 * `DISPATCHED`
 * - If the type is OUTLET then:
 *   * If the status is OPEN and there is a cost the cost
 * will be updated.
 *   * If the status is SENT or DISPATCHED and received is not null the received
 * quantity will be updated.
 *   * If the status is OPEN or SENT and count is not null then the count
 * quantity will be updated.
 * - If the type is RETURN and the status is OPEN or SENT and count is not
 * null then the count quantity will be updated.
 * - If the type is STOCKTAKE and the status is
 * STATUS\_STOCKTAKE\_IN\_PROGRESS or STATUS\_STOCKTAKE\_IN\_PROCESS\_PROCESSED and received is not
 * null then the received quantity will be updated.
 */
class UpdateProductInConsignment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/products/{$this->productId}";
	}


	/**
	 * @param string $consignmentId The consignment id to be updated.
	 * @param string $productId The product id of the product to be added to the consignment.
	 */
	public function __construct(
		protected string $consignmentId,
		protected string $productId,
	) {
	}
}
