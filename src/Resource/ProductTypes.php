<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ProductTypes\GetSingleProductType;
use LightSpeed\XSeries\Requests\ProductTypes\ListProductTypes;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class ProductTypes extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listProductTypes(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListProductTypes($before, $pageSize));
	}


	/**
	 * @param string $productTypeId
	 */
	public function getSingleProductType(string $productTypeId): Response
	{
		return $this->connector->send(new GetSingleProductType($productTypeId));
	}
}
