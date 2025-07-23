<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Brands\CreateBrand;
use LightSpeed\XSeries\Requests\Brands\GetSingleBrand;
use LightSpeed\XSeries\Requests\Brands\ListBrands;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Brands extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listBrands(?string $after = null, ?string $before = null, ?string $pageSize = null): Response
	{
		return $this->connector->send(new ListBrands($after, $before, $pageSize));
	}


	/**
	 * @param mixed $name
	 * @param string $accept
	 */
	public function createBrand(mixed $name = null, ?string $accept = null): Response
	{
		return $this->connector->send(new CreateBrand($name, $accept));
	}


	/**
	 * @param string $brandId
	 */
	public function getSingleBrand(string $brandId): Response
	{
		return $this->connector->send(new GetSingleBrand($brandId));
	}
}
