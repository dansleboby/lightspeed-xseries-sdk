<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\CustomerGroups\AddCustomerToCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\CreateNewCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\DeleteCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\DeleteCustomersFromCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\GetCustomersForCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\GetSingleCustomerGroup;
use LightSpeed\XSeries\Requests\CustomerGroups\ListCustomerGroups;
use LightSpeed\XSeries\Requests\CustomerGroups\UpdateCustomerGroup;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class CustomerGroups extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 */
	public function listCustomerGroups(?string $before, ?string $pageSize, ?string $deleted): Response
	{
		return $this->connector->send(new ListCustomerGroups($before, $pageSize, $deleted));
	}


	/**
	 * @param mixed $name
	 * @param mixed $id
	 * @param mixed $groupId
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $version
	 */
	public function createNewCustomerGroup(
		mixed $name,
		mixed $id,
		mixed $groupId,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $deletedAt,
		mixed $version,
	): Response
	{
		return $this->connector->send(new CreateNewCustomerGroup($name, $id, $groupId, $createdAt, $updatedAt, $deletedAt, $version));
	}


	/**
	 * @param string $customerGroupId
	 */
	public function getSingleCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new GetSingleCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId
	 * @param mixed $name
	 * @param mixed $id
	 * @param mixed $groupId
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $version
	 */
	public function updateCustomerGroup(
		string $customerGroupId,
		mixed $name,
		mixed $id,
		mixed $groupId,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $deletedAt,
		mixed $version,
	): Response
	{
		return $this->connector->send(new UpdateCustomerGroup($customerGroupId, $name, $id, $groupId, $createdAt, $updatedAt, $deletedAt, $version));
	}


	/**
	 * @param string $customerGroupId
	 */
	public function deleteCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new DeleteCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId
	 */
	public function getCustomersForCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new GetCustomersForCustomerGroup($customerGroupId));
	}


	/**
	 * @param string $customerGroupId
	 * @param mixed $customerIds
	 */
	public function addCustomerToCustomerGroup(string $customerGroupId, mixed $customerIds): Response
	{
		return $this->connector->send(new AddCustomerToCustomerGroup($customerGroupId, $customerIds));
	}


	/**
	 * @param string $customerGroupId
	 */
	public function deleteCustomersFromCustomerGroup(string $customerGroupId): Response
	{
		return $this->connector->send(new DeleteCustomersFromCustomerGroup($customerGroupId));
	}
}
