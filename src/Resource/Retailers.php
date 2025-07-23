<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Retailers\GetRetailer;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Retailers extends BaseResource
{
	public function getRetailer(): Response
	{
		return $this->connector->send(new GetRetailer());
	}
}
