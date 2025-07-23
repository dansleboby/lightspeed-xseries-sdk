<?php

namespace LightSpeed\XSeries\Requests\PickLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetPickListsBySaleID
 *
 * Returns a list of pick lists for a given sale.
 */
class GetPickListsBySaleId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sales/{$this->saleId}/pick_lists";
	}


	/**
	 * @param string $saleId The sale id
	 */
	public function __construct(
		protected string $saleId,
	) {
	}
}
