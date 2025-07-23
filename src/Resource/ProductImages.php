<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ProductImages\DeleteProductImage;
use LightSpeed\XSeries\Requests\ProductImages\GetSingleProductImageData;
use LightSpeed\XSeries\Requests\ProductImages\SetImagePosition;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class ProductImages extends Resource
{
	/**
	 * @param string $productImageId
	 */
	public function getSingleProductImageData(string $productImageId): Response
	{
		return $this->connector->send(new GetSingleProductImageData($productImageId));
	}


	/**
	 * @param string $productImageId
	 * @param mixed $position
	 */
	public function setImagePosition(string $productImageId, mixed $position): Response
	{
		return $this->connector->send(new SetImagePosition($productImageId, $position));
	}


	/**
	 * @param string $productImageId
	 */
	public function deleteProductImage(string $productImageId): Response
	{
		return $this->connector->send(new DeleteProductImage($productImageId));
	}
}
