<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Customers\CreateCustomer;
use LightSpeed\XSeries\Requests\Customers\DeleteCustomerById;
use LightSpeed\XSeries\Requests\Customers\GetCustomerById;
use LightSpeed\XSeries\Requests\Customers\ListCustomers;
use LightSpeed\XSeries\Requests\Customers\UpdateCustomerById;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Customers extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listCustomers(
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
		?bool $deleted = null,
	): Response
	{
		return $this->connector->send(new ListCustomers($after, $before, $pageSize, $deleted));
	}


	public function createCustomer(): Response
	{
		return $this->connector->send(new CreateCustomer());
	}


	/**
	 * @param string $customerId The customer id
	 */
	public function getCustomerById(string $customerId): Response
	{
		return $this->connector->send(new GetCustomerById($customerId));
	}


	/**
	 * @param string $customerId The customer id
	 */
	public function updateCustomerById(string $customerId): Response
	{
		return $this->connector->send(new UpdateCustomerById($customerId));
	}


	/**
	 * @param string $customerId The customer id
	 */
	public function deleteCustomerById(string $customerId): Response
	{
		return $this->connector->send(new DeleteCustomerById($customerId));
	}
}
