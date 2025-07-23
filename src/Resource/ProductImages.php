<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ProductImages\DeleteProductImageById;
use LightSpeed\XSeries\Requests\ProductImages\GetProductImageDataById;
use LightSpeed\XSeries\Requests\ProductImages\SetImagePosition;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ProductImages extends BaseResource
{
	/**
	 * @param string $productImageId The product image id
	 */
	public function getProductImageDataById(string $productImageId): Response
	{
		return $this->connector->send(new GetProductImageDataById($productImageId));
	}


	/**
	 * @param string $productImageId The product image id
	 */
	public function setImagePosition(string $productImageId): Response
	{
		return $this->connector->send(new SetImagePosition($productImageId));
	}


	/**
	 * @param string $productImageId The product image id
	 */
	public function deleteProductImageById(string $productImageId): Response
	{
		return $this->connector->send(new DeleteProductImageById($productImageId));
	}
}
