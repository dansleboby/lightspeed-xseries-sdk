<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Consigments\CreateConsignment;
use LightSpeed\XSeries\Requests\Consigments\DeleteConsignment;
use LightSpeed\XSeries\Requests\Consigments\GetSingleConsignment;
use LightSpeed\XSeries\Requests\Consigments\ListConsignmentTotals;
use LightSpeed\XSeries\Requests\Consigments\ListConsignments;
use LightSpeed\XSeries\Requests\Consigments\UpdateConsignment;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Consigments extends BaseResource
{
	/**
	 * @param string $accept
	 */
	public function listConsignments(?string $accept = null): Response
	{
		return $this->connector->send(new ListConsignments($accept));
	}


	/**
	 * @param mixed $outletId
	 * @param mixed $name
	 * @param mixed $dueAt
	 * @param mixed $type
	 * @param mixed $status
	 * @param mixed $supplierId
	 * @param mixed $sourceOutletId
	 * @param mixed $consignmentDate
	 * @param mixed $receivedAt
	 * @param mixed $showInactive
	 * @param mixed $supplierInvoice
	 * @param mixed $reference
	 * @param mixed $totalCountGain
	 * @param mixed $totalCostGain
	 * @param mixed $totalCountLoss
	 * @param mixed $totalCostLoss
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $version
	 * @param mixed $filters
	 * @param string $accept
	 */
	public function createConsignment(
		mixed $outletId = null,
		mixed $name = null,
		mixed $dueAt = null,
		mixed $type = null,
		mixed $status = null,
		mixed $supplierId = null,
		mixed $sourceOutletId = null,
		mixed $consignmentDate = null,
		mixed $receivedAt = null,
		mixed $showInactive = null,
		mixed $supplierInvoice = null,
		mixed $reference = null,
		mixed $totalCountGain = null,
		mixed $totalCostGain = null,
		mixed $totalCountLoss = null,
		mixed $totalCostLoss = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $deletedAt = null,
		mixed $version = null,
		mixed $filters = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateConsignment($outletId, $name, $dueAt, $type, $status, $supplierId, $sourceOutletId, $consignmentDate, $receivedAt, $showInactive, $supplierInvoice, $reference, $totalCountGain, $totalCostGain, $totalCountLoss, $totalCostLoss, $createdAt, $updatedAt, $deletedAt, $version, $filters, $accept));
	}


	/**
	 * @param string $consignmentId
	 * @param string $accept
	 */
	public function getSingleConsignment(string $consignmentId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleConsignment($consignmentId, $accept));
	}


	/**
	 * @param string $consignmentId
	 * @param mixed $outletId
	 * @param mixed $name
	 * @param mixed $dueAt
	 * @param mixed $type
	 * @param mixed $status
	 * @param mixed $supplierId
	 * @param mixed $sourceOutletId
	 * @param mixed $consignmentDate
	 * @param mixed $receivedAt
	 * @param mixed $showInactive
	 * @param mixed $supplierInvoice
	 * @param mixed $reference
	 * @param mixed $totalCountGain
	 * @param mixed $totalCostGain
	 * @param mixed $totalCountLoss
	 * @param mixed $totalCostLoss
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $version
	 * @param mixed $filters
	 * @param string $accept
	 */
	public function updateConsignment(
		string $consignmentId,
		mixed $outletId = null,
		mixed $name = null,
		mixed $dueAt = null,
		mixed $type = null,
		mixed $status = null,
		mixed $supplierId = null,
		mixed $sourceOutletId = null,
		mixed $consignmentDate = null,
		mixed $receivedAt = null,
		mixed $showInactive = null,
		mixed $supplierInvoice = null,
		mixed $reference = null,
		mixed $totalCountGain = null,
		mixed $totalCostGain = null,
		mixed $totalCountLoss = null,
		mixed $totalCostLoss = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $deletedAt = null,
		mixed $version = null,
		mixed $filters = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateConsignment($consignmentId, $outletId, $name, $dueAt, $type, $status, $supplierId, $sourceOutletId, $consignmentDate, $receivedAt, $showInactive, $supplierInvoice, $reference, $totalCountGain, $totalCostGain, $totalCountLoss, $totalCostLoss, $createdAt, $updatedAt, $deletedAt, $version, $filters, $accept));
	}


	/**
	 * @param string $consignmentId
	 * @param string $accept
	 */
	public function deleteConsignment(string $consignmentId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeleteConsignment($consignmentId, $accept));
	}


	/**
	 * @param string $consignmentId
	 * @param string $accept
	 */
	public function listConsignmentTotals(string $consignmentId, ?string $accept = null): Response
	{
		return $this->connector->send(new ListConsignmentTotals($consignmentId, $accept));
	}
}
