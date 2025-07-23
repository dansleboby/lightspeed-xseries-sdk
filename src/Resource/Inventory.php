<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Inventory\ListInventoryRecords;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Inventory extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listInventoryRecords(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListInventoryRecords($before, $pageSize));
	}
}
