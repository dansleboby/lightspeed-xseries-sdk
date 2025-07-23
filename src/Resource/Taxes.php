<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Taxes\ListTaxes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Taxes extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listTaxes(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListTaxes($after, $before, $pageSize));
	}
}
