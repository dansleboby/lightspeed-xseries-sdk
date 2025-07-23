<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\SerialNumbers\CreateSerialNumber;
use LightSpeed\XSeries\Requests\SerialNumbers\DeleteSerialNumber;
use LightSpeed\XSeries\Requests\SerialNumbers\GetSingleSerialNumber;
use LightSpeed\XSeries\Requests\SerialNumbers\ListSerialNumbers;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class SerialNumbers extends Resource
{
	/**
	 * @param string $productId (string) A product ID. This filters the serial numbers to only include ones on this product.
	 * @param string $outletId (string) An outlet ID. This filters the serial numbers to only include ones on this outlet.
	 * @param string $saleId (string) A sale ID. This filters the serial numbers to only include ones that were sold in the specified sale.
	 * @param string $lineItemId (string) A line item ID. This filters the serial numbers to only include ones sold in the specified line item.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listSerialNumbers(
		?string $productId,
		?string $outletId,
		?string $saleId,
		?string $lineItemId,
		?string $before,
		?string $pageSize,
	): Response
	{
		return $this->connector->send(new ListSerialNumbers($productId, $outletId, $saleId, $lineItemId, $before, $pageSize));
	}


	/**
	 * @param mixed $code
	 * @param mixed $productId
	 * @param mixed $outletId
	 */
	public function createSerialNumber(mixed $code, mixed $productId, mixed $outletId): Response
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
