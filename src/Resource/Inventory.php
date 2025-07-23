<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Inventory\ListInventoryRecords;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Inventory extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listInventoryRecords(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListInventoryRecords($after, $before, $pageSize, $accept));
	}
}
