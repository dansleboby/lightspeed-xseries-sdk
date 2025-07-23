<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\OutletProductTaxes\ListOutletProductTaxes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class OutletProductTaxes extends BaseResource
{
	/**
	 * @param string $outletId (string) The ID of the outlet for which the results should be returned.
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 * @param string $accept
	 */
	public function listOutletProductTaxes(
		?string $outletId = null,
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $deleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListOutletProductTaxes($outletId, $after, $before, $pageSize, $deleted, $accept));
	}
}
