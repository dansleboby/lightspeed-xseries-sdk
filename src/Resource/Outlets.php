<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Outlets\GetOutletById;
use LightSpeed\XSeries\Requests\Outlets\ListOutlets;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Outlets extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listOutlets(
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
		?bool $deleted = null,
	): Response
	{
		return $this->connector->send(new ListOutlets($after, $before, $pageSize, $deleted));
	}


	/**
	 * @param string $outletId The outlet id
	 */
	public function getOutletById(string $outletId): Response
	{
		return $this->connector->send(new GetOutletById($outletId));
	}
}
