<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Suppliers\CreateOrUpdateSupplier;
use LightSpeed\XSeries\Requests\Suppliers\DeleteSupplier;
use LightSpeed\XSeries\Requests\Suppliers\GetSingleSupplier;
use LightSpeed\XSeries\Requests\Suppliers\ListSuppliers;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Suppliers extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listSuppliers(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListSuppliers($after, $before, $pageSize, $accept));
	}


	/**
	 * @param string $supplierId
	 * @param string $accept
	 */
	public function getSingleSupplier(string $supplierId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleSupplier($supplierId, $accept));
	}


	/**
	 * @param string $supplierId
	 */
	public function deleteSupplier(string $supplierId): Response
	{
		return $this->connector->send(new DeleteSupplier($supplierId));
	}


	/**
	 * @param mixed $id
	 * @param mixed $name
	 * @param mixed $description
	 * @param mixed $contact
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createOrUpdateSupplier(
		mixed $id = null,
		mixed $name = null,
		mixed $description = null,
		mixed $contact = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateOrUpdateSupplier($id, $name, $description, $contact, $contentType, $accept));
	}
}
