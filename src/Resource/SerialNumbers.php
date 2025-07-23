<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\SerialNumbers\CreateSerialNumber;
use LightSpeed\XSeries\Requests\SerialNumbers\DeleteSerialNumber;
use LightSpeed\XSeries\Requests\SerialNumbers\GetSingleSerialNumber;
use LightSpeed\XSeries\Requests\SerialNumbers\ListSerialNumbers;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SerialNumbers extends BaseResource
{
	/**
	 * @param string $productId (string) A product ID. This filters the serial numbers to only include ones on this product.
	 * @param string $outletId (string) An outlet ID. This filters the serial numbers to only include ones on this outlet.
	 * @param string $saleId (string) A sale ID. This filters the serial numbers to only include ones that were sold in the specified sale.
	 * @param string $lineItemId (string) A line item ID. This filters the serial numbers to only include ones sold in the specified line item.
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listSerialNumbers(
		?string $productId = null,
		?string $outletId = null,
		?string $saleId = null,
		?string $lineItemId = null,
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
	): Response
	{
		return $this->connector->send(new ListSerialNumbers($productId, $outletId, $saleId, $lineItemId, $after, $before, $pageSize));
	}


	/**
	 * @param mixed $code
	 * @param mixed $productId
	 * @param mixed $outletId
	 */
	public function createSerialNumber(mixed $code = null, mixed $productId = null, mixed $outletId = null): Response
	{
		return $this->connector->send(new CreateSerialNumber($code, $productId, $outletId));
	}


	/**
	 * @param string $serialnumberId
	 */
	public function getSingleSerialNumber(string $serialnumberId): Response
	{
		return $this->connector->send(new GetSingleSerialNumber($serialnumberId));
	}


	/**
	 * @param string $serialnumberId
	 */
	public function deleteSerialNumber(string $serialnumberId): Response
	{
		return $this->connector->send(new DeleteSerialNumber($serialnumberId));
	}
}
