<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Consigments\CreateConsignment;
use LightSpeed\XSeries\Requests\Consigments\DeleteConsignment;
use LightSpeed\XSeries\Requests\Consigments\GetSingleConsignment;
use LightSpeed\XSeries\Requests\Consigments\ListConsignmentTotals;
use LightSpeed\XSeries\Requests\Consigments\ListConsignments;
use LightSpeed\XSeries\Requests\Consigments\UpdateConsignment;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Consigments extends Resource
{
	public function listConsignments(): Response
	{
		return $this->connector->send(new ListConsignments());
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
	 */
	public function createConsignment(
		mixed $outletId,
		mixed $name,
		mixed $dueAt,
		mixed $type,
		mixed $status,
		mixed $supplierId,
		mixed $sourceOutletId,
		mixed $consignmentDate,
		mixed $receivedAt,
		mixed $showInactive,
		mixed $supplierInvoice,
		mixed $reference,
		mixed $totalCountGain,
		mixed $totalCostGain,
		mixed $totalCountLoss,
		mixed $totalCostLoss,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $deletedAt,
		mixed $version,
		mixed $filters,
	): Response
	{
		return $this->connector->send(new CreateConsignment($outletId, $name, $dueAt, $type, $status, $supplierId, $sourceOutletId, $consignmentDate, $receivedAt, $showInactive, $supplierInvoice, $reference, $totalCountGain, $totalCostGain, $totalCountLoss, $totalCostLoss, $createdAt, $updatedAt, $deletedAt, $version, $filters));
	}


	/**
	 * @param string $consignmentId
	 */
	public function getSingleConsignment(string $consignmentId): Response
	{
		return $this->connector->send(new GetSingleConsignment($consignmentId));
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
	 */
	public function updateConsignment(
		string $consignmentId,
		mixed $outletId,
		mixed $name,
		mixed $dueAt,
		mixed $type,
		mixed $status,
		mixed $supplierId,
		mixed $sourceOutletId,
		mixed $consignmentDate,
		mixed $receivedAt,
		mixed $showInactive,
		mixed $supplierInvoice,
		mixed $reference,
		mixed $totalCountGain,
		mixed $totalCostGain,
		mixed $totalCountLoss,
		mixed $totalCostLoss,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $deletedAt,
		mixed $version,
		mixed $filters,
	): Response
	{
		return $this->connector->send(new UpdateConsignment($consignmentId, $outletId, $name, $dueAt, $type, $status, $supplierId, $sourceOutletId, $consignmentDate, $receivedAt, $showInactive, $supplierInvoice, $reference, $totalCountGain, $totalCostGain, $totalCountLoss, $totalCostLoss, $createdAt, $updatedAt, $deletedAt, $version, $filters));
	}


	/**
	 * @param string $consignmentId
	 */
	public function deleteConsignment(string $consignmentId): Response
	{
		return $this->connector->send(new DeleteConsignment($consignmentId));
	}


	/**
	 * @param string $consignmentId
	 */
	public function listConsignmentTotals(string $consignmentId): Response
	{
		return $this->connector->send(new ListConsignmentTotals($consignmentId));
	}
}
