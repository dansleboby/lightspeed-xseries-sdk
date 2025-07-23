<?php

namespace LightSpeed\XSeries\Requests\ConsignmentProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductFromConsignment
 *
 * Removes the specific product from the consignment.
 *
 * For `SUPPLIER` workflow:
 *
 * - Cannot delete a
 * product from a consignment with a status of `DISPATCHED`, `RECEIVED` or `CANCELLED`
 *
 * For consignment
 * type `OUTLET`:
 *
 * - Cannot delete a product if the consignment has a status of `SENT` or
 * `RECEIVED`
 *
 * For consignment type `RETURN`:
 *
 * - Cannot delete a product if the consignment has a
 * status of `SENT`
 */
class DeleteProductFromConsignment extends Request
{
	protected Method $method = Method::DELETE;


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
