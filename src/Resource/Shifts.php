<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Shifts\ListShifts;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Shifts extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listShifts(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListShifts($after, $before, $pageSize));
	}
}
