<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Fulfillment\FulfillSale;
use LightSpeed\XSeries\Requests\Fulfillment\GetFulfillmentsBySaleId;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Fulfillment extends BaseResource
{
	/**
	 * @param string $saleId The sale id
	 */
	public function getFulfillmentsBySaleId(string $saleId): Response
	{
		return $this->connector->send(new GetFulfillmentsBySaleId($saleId));
	}


	/**
	 * @param string $saleId The sale id
	 */
	public function fulfillSale(string $saleId): Response
	{
		return $this->connector->send(new FulfillSale($saleId));
	}
}
