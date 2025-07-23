<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Outlets\GetSingleOutlet;
use LightSpeed\XSeries\Requests\Outlets\ListOutlets;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Outlets extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 */
	public function listOutlets(?string $before, ?string $pageSize, ?string $deleted): Response
	{
		return $this->connector->send(new ListOutlets($before, $pageSize, $deleted));
	}


	/**
	 * @param string $outletId
	 */
	public function getSingleOutlet(string $outletId): Response
	{
		return $this->connector->send(new GetSingleOutlet($outletId));
	}
}
