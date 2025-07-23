<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Retailers\GetInformationAboutThisRetailer;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Retailers extends Resource
{
	public function getInformationAboutThisRetailer(): Response
	{
		return $this->connector->send(new GetInformationAboutThisRetailer());
	}
}
