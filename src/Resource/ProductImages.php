<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ProductImages\DeleteProductImage;
use LightSpeed\XSeries\Requests\ProductImages\GetSingleProductImageData;
use LightSpeed\XSeries\Requests\ProductImages\SetImagePosition;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ProductImages extends BaseResource
{
	/**
	 * @param string $productImageId
	 * @param string $accept
	 */
	public function getSingleProductImageData(string $productImageId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleProductImageData($productImageId, $accept));
	}


	/**
	 * @param string $productImageId
	 * @param mixed $position
	 * @param string $accept
	 */
	public function setImagePosition(string $productImageId, mixed $position = null, ?string $accept = null): Response
	{
		return $this->connector->send(new SetImagePosition($productImageId, $position, $accept));
	}


	/**
	 * @param string $productImageId
	 * @param string $accept
	 */
	public function deleteProductImage(string $productImageId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeleteProductImage($productImageId, $accept));
	}
}
