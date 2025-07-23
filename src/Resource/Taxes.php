<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Taxes\CreateTax;
use LightSpeed\XSeries\Requests\Taxes\GetSingleTaxById;
use LightSpeed\XSeries\Requests\Taxes\ListTaxes;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Taxes extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listTaxes(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListTaxes($before, $pageSize));
	}


	public function createTax(): Response
	{
		return $this->connector->send(new CreateTax());
	}


	/**
	 * @param string $taxId
	 */
	public function getSingleTaxById(string $taxId): Response
	{
		return $this->connector->send(new GetSingleTaxById($taxId));
	}
}
