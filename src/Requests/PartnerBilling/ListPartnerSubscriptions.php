<?php

namespace LightSpeed\XSeries\Requests\PartnerBilling;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List partner subscriptions
 */
class ListPartnerSubscriptions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/partner/billing/subscriptions";
	}


	public function __construct()
	{
	}
}
