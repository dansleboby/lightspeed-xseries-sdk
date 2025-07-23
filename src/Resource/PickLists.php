<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PickLists\GetPickListsBySaleId;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PickLists extends BaseResource
{
	/**
	 * @param string $saleId The sale id
	 */
	public function getPickListsBySaleId(string $saleId): Response
	{
		return $this->connector->send(new GetPickListsBySaleId($saleId));
	}
}
