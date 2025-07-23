<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Suppliers\CreateSupplier;
use LightSpeed\XSeries\Requests\Suppliers\DeleteSupplierById;
use LightSpeed\XSeries\Requests\Suppliers\GetSupplierById;
use LightSpeed\XSeries\Requests\Suppliers\ListSuppliers;
use LightSpeed\XSeries\Requests\Suppliers\UpdateSupplierById;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Suppliers extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listSuppliers(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListSuppliers($after, $before, $pageSize));
	}


	public function createSupplier(): Response
	{
		return $this->connector->send(new CreateSupplier());
	}


	/**
	 * @param string $supplierId The supplier id
	 */
	public function getSupplierById(string $supplierId): Response
	{
		return $this->connector->send(new GetSupplierById($supplierId));
	}


	/**
	 * @param string $supplierId The supplier id
	 */
	public function updateSupplierById(string $supplierId): Response
	{
		return $this->connector->send(new UpdateSupplierById($supplierId));
	}


	/**
	 * @param string $supplierId The supplier id.
	 */
	public function deleteSupplierById(string $supplierId): Response
	{
		return $this->connector->send(new DeleteSupplierById($supplierId));
	}
}
