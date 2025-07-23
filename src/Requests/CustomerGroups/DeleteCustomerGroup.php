<?php

namespace LightSpeed\XSeries\Requests\CustomerGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a customer group
 */
class DeleteCustomerGroup extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/customer_groups/{$this->customerGroupId}";
	}


	/**
	 * @param string $customerGroupId
	 */
	public function __construct(
		protected string $customerGroupId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
