<?php

namespace LightSpeed\XSeries\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a customer
 */
class DeleteCustomer extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/customers/{$this->customerId}";
	}


	/**
	 * @param string $customerId
	 */
	public function __construct(
		protected string $customerId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
