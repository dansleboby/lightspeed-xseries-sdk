<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ProductTypes\GetProductTypeById;
use LightSpeed\XSeries\Requests\ProductTypes\ListProductTypes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ProductTypes extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listProductTypes(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListProductTypes($after, $before, $pageSize));
	}


	/**
	 * @param string $productTypeId The product type id
	 */
	public function getProductTypeById(string $productTypeId): Response
	{
		return $this->connector->send(new GetProductTypeById($productTypeId));
	}
}
