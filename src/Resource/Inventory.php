<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Inventory\ListInventoryRecords;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Inventory extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listInventoryRecords(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListInventoryRecords($after, $before, $pageSize));
	}
}
