<?php

namespace LightSpeed\XSeries\Requests\PartnerBilling;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get subscription by token
 */
class GetSubscriptionByToken extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/partner/billing/token/{$this->partnerSubscriptionToken}";
	}


	/**
	 * @param string $partnerSubscriptionToken
	 */
	public function __construct(
		protected string $partnerSubscriptionToken,
	) {
	}
}
