<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Retailers\GetInformationAboutThisRetailer;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Retailers extends BaseResource
{
	/**
	 * @param string $accept
	 */
	public function getInformationAboutThisRetailer(?string $accept = null): Response
	{
		return $this->connector->send(new GetInformationAboutThisRetailer($accept));
	}
}
