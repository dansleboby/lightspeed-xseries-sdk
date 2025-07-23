<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Outlets\GetSingleOutlet;
use LightSpeed\XSeries\Requests\Outlets\ListOutlets;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Outlets extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 * @param string $accept
	 */
	public function listOutlets(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $deleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListOutlets($after, $before, $pageSize, $deleted, $accept));
	}


	/**
	 * @param string $outletId
	 * @param string $accept
	 */
	public function getSingleOutlet(string $outletId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleOutlet($outletId, $accept));
	}
}
