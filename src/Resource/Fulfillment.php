<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Fulfillment\FulfilSale;
use LightSpeed\XSeries\Requests\Fulfillment\ListSaleFulfillments;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Fulfillment extends BaseResource
{
	/**
	 * @param string $saleId
	 * @param string $accept
	 */
	public function listSaleFulfillments(string $saleId, ?string $accept = null): Response
	{
		return $this->connector->send(new ListSaleFulfillments($saleId, $accept));
	}


	/**
	 * @param string $saleId
	 * @param string $accept
	 */
	public function fulfilSale(string $saleId, ?string $accept = null): Response
	{
		return $this->connector->send(new FulfilSale($saleId, $accept));
	}
}
