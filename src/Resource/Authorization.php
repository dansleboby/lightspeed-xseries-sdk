<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Authorization\RefreshTokenRequest;
use LightSpeed\XSeries\Requests\Authorization\TokenRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Authorization extends BaseResource
{
	public function tokenRequest(): Response
	{
		return $this->connector->send(new TokenRequest());
	}


	public function refreshTokenRequest(): Response
	{
		return $this->connector->send(new RefreshTokenRequest());
	}
}
