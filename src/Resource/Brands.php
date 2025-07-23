<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Brands\CreateBrand;
use LightSpeed\XSeries\Requests\Brands\GetSingleBrand;
use LightSpeed\XSeries\Requests\Brands\ListBrands;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Brands extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listBrands(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListBrands($before, $pageSize));
	}


	/**
	 * @param mixed $name
	 */
	public function createBrand(mixed $name): Response
	{
		return $this->connector->send(new CreateBrand($name));
	}


	/**
	 * @param string $brandId
	 */
	public function getSingleBrand(string $brandId): Response
	{
		return $this->connector->send(new GetSingleBrand($brandId));
	}
}
