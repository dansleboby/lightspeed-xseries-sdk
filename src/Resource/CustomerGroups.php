<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\CustomerGroups\AddCustomersToCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\CreateCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\DeleteCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\DeleteCustomersFromCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\GetCustomerGroupById;
use LightSpeed\XSeries\Requests\CustomerGroups\GetCustomerGroupCustomers;
use LightSpeed\XSeries\Requests\CustomerGroups\ListCustomerGroups;
use LightSpeed\XSeries\Requests\CustomerGroups\UpdateCustomerGroup;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CustomerGroups extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listCustomerGroups(
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
		?bool $deleted = null,
	): Response
	{
		return $this->connector->send(new ListCustomerGroups($after, $before, $pageSize, $deleted));
	}


	public function createCustomerGroup(): Response
	{
		return $this->connector->send(new CreateCustomerGroup());
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function getCustomerGroupById(string $customerGroupId): Response
	{
		return $this->connector->send(new GetCustomerGroupById($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function updateCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new UpdateCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function deleteCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new DeleteCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function getCustomerGroupCustomers(
		string $customerGroupId,
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new GetCustomerGroupCustomers($customerGroupId, $after, $before, $pageSize));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function addCustomersToCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new AddCustomersToCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId The customer group id
	 */
	public function deleteCustomersFromCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new DeleteCustomersFromCustomerGroup($customerGroupId));
	}
}
