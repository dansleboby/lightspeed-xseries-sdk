<?php

namespace LightSpeed\XSeries\Requests\CustomerGroups;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add a customer to customer group
 */
class AddCustomerToCustomerGroup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/customer_groups/{$this->customerGroupId}/customers";
	}


	/**
	 * @param string $customerGroupId
	 * @param null|mixed $customerIds
	 */
	public function __construct(
		protected string $customerGroupId,
		protected mixed $customerIds = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['customer_ids' => $this->customerIds]);
	}
}
