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
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class CustomerGroups extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 * @param string $accept
	 */
	public function listCustomerGroups(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $deleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListCustomerGroups($after, $before, $pageSize, $deleted, $accept));
	}


	/**
	 * @param mixed $name
	 * @param mixed $id
	 * @param mixed $groupId
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $version
	 * @param string $accept
	 */
	public function createNewCustomerGroup(
		mixed $name = null,
		mixed $id = null,
		mixed $groupId = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $deletedAt = null,
		mixed $version = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateNewCustomerGroup($name, $id, $groupId, $createdAt, $updatedAt, $deletedAt, $version, $accept));
	}


	/**
	 * @param string $customerGroupId
	 * @param string $accept
	 */
	public function getSingleCustomerGroup(string $customerGroupId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleCustomerGroup($customerGroupId, $accept));
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
	 * @param string $accept
	 */
	public function updateCustomerGroup(
		string $customerGroupId,
		mixed $name = null,
		mixed $id = null,
		mixed $groupId = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $deletedAt = null,
		mixed $version = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateCustomerGroup($customerGroupId, $name, $id, $groupId, $createdAt, $updatedAt, $deletedAt, $version, $accept));
	}


	/**
	 * @param string $customerGroupId
	 * @param string $accept
	 */
	public function deleteCustomerGroup(string $customerGroupId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeleteCustomerGroup($customerGroupId, $accept));
	}


	/**
	 * @param string $customerGroupId
	 * @param string $accept
	 */
	public function getCustomersForCustomerGroup(string $customerGroupId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetCustomersForCustomerGroup($customerGroupId, $accept));
	}


	/**
	 * @param string $customerGroupId
	 * @param mixed $customerIds
	 * @param string $accept
	 */
	public function addCustomerToCustomerGroup(
		string $customerGroupId,
		mixed $customerIds = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new AddCustomerToCustomerGroup($customerGroupId, $customerIds, $accept));
	}


	/**
	 * @param string $customerGroupId
	 * @param string $accept
	 */
	public function deleteCustomersFromCustomerGroup(string $customerGroupId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeleteCustomersFromCustomerGroup($customerGroupId, $accept));
	}
}
