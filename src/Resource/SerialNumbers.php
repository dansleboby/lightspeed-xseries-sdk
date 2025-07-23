<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\SerialNumbers\CreateSerialnumber;
use LightSpeed\XSeries\Requests\SerialNumbers\DeleteSerialnumber;
use LightSpeed\XSeries\Requests\SerialNumbers\GetSerialnumber;
use LightSpeed\XSeries\Requests\SerialNumbers\GetSerialnumbers;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SerialNumbers extends BaseResource
{
	/**
	 * @param string $productId A product ID. This filters the serial numbers to only include ones on this product.
	 * @param string $outletId An outlet ID. This filters the serial numbers to only include ones on this outlet.
	 * @param string $saleId A sale ID. This filters the serial numbers to only include ones that were sold in the specified sale.
	 * @param string $lineItemId A line item ID. This filters the serial numbers to only include ones sold in the specified line item.
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function getSerialnumbers(
		?string $productId = null,
		?string $outletId = null,
		?string $saleId = null,
		?string $lineItemId = null,
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new GetSerialnumbers($productId, $outletId, $saleId, $lineItemId, $after, $before, $pageSize));
	}


	public function createSerialnumber(): Response
	{
		return $this->connector->send(new CreateSerialnumber());
	}


	/**
	 * @param string $serialnumberId The serial number id
	 */
	public function getSerialnumber(string $serialnumberId): Response
	{
		return $this->connector->send(new GetSerialnumber($serialnumberId));
	}


	/**
	 * @param string $serialnumberId The serial number id
	 */
	public function deleteSerialnumber(string $serialnumberId): Response
	{
		return $this->connector->send(new DeleteSerialnumber($serialnumberId));
	}
}
