<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Audit\GetSecurityEvents;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Audit extends BaseResource
{
	public function getSecurityEvents(): Response
	{
		return $this->connector->send(new GetSecurityEvents());
	}
}
