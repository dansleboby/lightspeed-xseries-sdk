<?php

namespace LightSpeed\XSeries\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetUser
 *
 * Returns the current user.
 */
class GetUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/user";
	}


	public function __construct()
	{
	}
}
