<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Taxes\CreateTax;
use LightSpeed\XSeries\Requests\Taxes\GetSingleTaxById;
use LightSpeed\XSeries\Requests\Taxes\ListTaxes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Taxes extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listTaxes(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListTaxes($after, $before, $pageSize, $accept));
	}


	/**
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createTax(?string $contentType = null, ?string $accept = null): Response
	{
		return $this->connector->send(new CreateTax($contentType, $accept));
	}


	/**
	 * @param string $taxId
	 * @param string $accept
	 */
	public function getSingleTaxById(string $taxId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleTaxById($taxId, $accept));
	}
}
