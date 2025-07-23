<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\OutletProductTaxes\ListOutletProductTaxes;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class OutletProductTaxes extends Resource
{
	/**
	 * @param string $outletId (string) The ID of the outlet for which the results should be returned.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 */
	public function listOutletProductTaxes(
		?string $outletId,
		?string $before,
		?string $pageSize,
		?string $deleted,
	): Response
	{
		return $this->connector->send(new ListOutletProductTaxes($outletId, $before, $pageSize, $deleted));
	}
}
