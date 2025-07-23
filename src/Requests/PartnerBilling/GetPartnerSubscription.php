<?php

namespace LightSpeed\XSeries\Requests\PartnerBilling;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a partner subscription
 */
class GetPartnerSubscription extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/partner/billing/subscriptions/{$this->subscriptionId}";
	}


	/**
	 * @param string $subscriptionId
	 */
	public function __construct(
		protected string $subscriptionId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
