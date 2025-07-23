<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\OutletProductTaxes\ListOutletProductTaxes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class OutletProductTaxes extends BaseResource
{
	/**
	 * @param string $outletId The ID of the outlet for which the results should be returned.
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listOutletProductTaxes(
		?string $outletId = null,
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
		?bool $deleted = null,
	): Response
	{
		return $this->connector->send(new ListOutletProductTaxes($outletId, $after, $before, $pageSize, $deleted));
	}
}
