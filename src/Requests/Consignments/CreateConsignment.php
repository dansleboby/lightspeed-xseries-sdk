<?php

namespace LightSpeed\XSeries\Requests\Consignments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateConsignment
 *
 * Creates a new consignment.
 *
 * The consignment type can be `SUPPLIER`, `OUTLET`, `STOCKTAKE` or
 * `RETURN`. The workflows for these are:
 *
 * - `SUPPLIER` workflow: `OPEN` -> `SENT` -> `DISPATCHED` ->
 * `RECEIVED`
 *   * Can be `CANCELLED` at any time, except from `RECEIVED`
 *   * Cannot create a
 * `DISPATCHED` or `RECEIVED` consignment directly
 *   * In the response `reference` refers to `Order
 * number` and `name` refers to `Note`
 * - `OUTLET` workflow: `OPEN` -> `SENT` -> `RECEIVED` (can be
 * `CANCELLED` at any time after `OPEN`)
 * - `RETURN` workflow: `OPEN` -> `SENT` or `CANCELLED`
 * -
 * `STOCKTAKE` workflow: `STOCKTAKE` or `STOCKTAKE_SCHEDULED` -> `STOCKTAKE_IN_PROGRESS` ->
 * `STOCKTAKE_IN_PROGRESS_PROCESSED` -> `STOCKTAKE_COMPLETE` (can be `CANCELLED` or `CLOSED` at any
 * time)
 */
class CreateConsignment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consignments";
	}


	public function __construct()
	{
	}
}
