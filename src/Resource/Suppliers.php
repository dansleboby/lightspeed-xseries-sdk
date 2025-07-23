<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Suppliers\CreateOrUpdateSupplier;
use LightSpeed\XSeries\Requests\Suppliers\DeleteSupplier;
use LightSpeed\XSeries\Requests\Suppliers\GetSingleSupplier;
use LightSpeed\XSeries\Requests\Suppliers\ListSuppliers;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Suppliers extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listSuppliers(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListSuppliers($before, $pageSize));
	}


	/**
	 * @param string $supplierId
	 */
	public function getSingleSupplier(string $supplierId): Response
	{
		return $this->connector->send(new GetSingleSupplier($supplierId));
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
	 */
	public function createOrUpdateSupplier(mixed $id, mixed $name, mixed $description, mixed $contact): Response
	{
		return $this->connector->send(new CreateOrUpdateSupplier($id, $name, $description, $contact));
	}
}
