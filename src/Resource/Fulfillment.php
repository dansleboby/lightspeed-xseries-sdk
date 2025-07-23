<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Fulfillment\FulfilSale;
use LightSpeed\XSeries\Requests\Fulfillment\ListSaleFulfillments;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Fulfillment extends Resource
{
	/**
	 * @param string $saleId
	 */
	public function listSaleFulfillments(string $saleId): Response
	{
		return $this->connector->send(new ListSaleFulfillments($saleId));
	}


	/**
	 * @param string $saleId
	 */
	public function fulfilSale(string $saleId): Response
	{
		return $this->connector->send(new FulfilSale($saleId));
	}
}
