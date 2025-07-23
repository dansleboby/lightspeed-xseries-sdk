<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Authorization\RefreshTokenRequest;
use LightSpeed\XSeries\Requests\Authorization\TokenRequest;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Authorization extends Resource
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
