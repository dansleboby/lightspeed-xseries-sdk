<?php

namespace LightSpeed\XSeries\Requests\Consignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateConsignmentByID
 *
 * Updates the given consignment.
 *
 * If the type is SUPPLIER then:
 *
 * - Cannot change from `SUPPLIER` to a
 * different consignment type
 * - `SUPPLIER` workflow: `OPEN` -> `SENT` -> `DISPATCHED` -> `RECEIVED`
 * -
 * Can be `CANCELLED` at any time, except from `RECEIVED`
 * - Cannot update a `SUPPLIER` consignment that
 * has the status `RECEIVED` or `CANCELLED`
 * - Cannot update status if there are no products in the
 * order
 * - At least one product should have non-zero received quantity before updating to `RECEIVED`
 */
class UpdateConsignmentById extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
