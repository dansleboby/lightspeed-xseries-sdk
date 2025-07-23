<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Brands\CreateBrand;
use LightSpeed\XSeries\Requests\Brands\DeleteBrandById;
use LightSpeed\XSeries\Requests\Brands\GetBrandById;
use LightSpeed\XSeries\Requests\Brands\ListBrands;
use LightSpeed\XSeries\Requests\Brands\UpdateBrandById;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Brands extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listBrands(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListBrands($after, $before, $pageSize));
	}


	public function createBrand(): Response
	{
		return $this->connector->send(new CreateBrand());
	}


	/**
	 * @param string $brandId The brand id
	 */
	public function getBrandById(string $brandId): Response
	{
		return $this->connector->send(new GetBrandById($brandId));
	}


	/**
	 * @param string $brandId The brand id.
	 */
	public function updateBrandById(string $brandId): Response
	{
		return $this->connector->send(new UpdateBrandById($brandId));
	}


	/**
	 * @param string $brandId The brand id.
	 */
	public function deleteBrandById(string $brandId): Response
	{
		return $this->connector->send(new DeleteBrandById($brandId));
	}
}
