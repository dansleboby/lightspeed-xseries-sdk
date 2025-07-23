<?php

namespace LightSpeed\XSeries\Requests\Consignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListConsignmentTotals
 *
 * Returns the count and cost for the given consignment.
 *
 * The consignment type can be `SUPPLIER`,
 * `OUTLET` or `RETURN` (not `STOCKTAKE`).
 *
 * The status of the consignment will determine which values
 * make sense:
 *
 * - If the consignment type is `OUTLET` the sent cost may not be accurate when the status
 * is `OPEN`.
 * - If the consignment is `OPEN` or `SENT` the received count and cost should both be
 * zero.
 * - For completely received consignments received cost should equal the sent cost and the
 * received count should equal the sent count.
 * - For partially received consignments we would expect
 * the received cost value to be less than sent cost value, and the received count to be less than the
 * sent count.
 */
class ListConsignmentTotals extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignments/{$this->consignmentId}/totals";
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function __construct(
		protected string $consignmentId,
	) {
	}
}
