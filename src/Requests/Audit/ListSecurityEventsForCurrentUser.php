<?php

namespace LightSpeed\XSeries\Requests\Audit;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List security events for current user
 */
class ListSecurityEventsForCurrentUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/security_events";
	}


	public function __construct()
	{
	}
}
