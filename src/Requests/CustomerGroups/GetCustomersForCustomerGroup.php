<?php

namespace LightSpeed\XSeries\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get customers for customer group
 */
class GetCustomersForCustomerGroup extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/customer_groups/{$this->customerGroupId}/customers";
	}


	/**
	 * @param string $customerGroupId
	 */
	public function __construct(
		protected string $customerGroupId,
	) {
	}
}
