<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Consignments\CreateConsignment;
use LightSpeed\XSeries\Requests\Consignments\DeleteConsignmentById;
use LightSpeed\XSeries\Requests\Consignments\GetConsignmentById;
use LightSpeed\XSeries\Requests\Consignments\GetConsignments;
use LightSpeed\XSeries\Requests\Consignments\ListConsignmentTotals;
use LightSpeed\XSeries\Requests\Consignments\UpdateConsignmentById;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Consignments extends BaseResource
{
	/**
	 * @param string $type The consignment type to search for.
	 * @param string $status The consignment status to search for.
	 * @param string $outletId Filter response by the ID of the outlet associated with the consignments.
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function getConsignments(
		?string $type = null,
		?string $status = null,
		?string $outletId = null,
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new GetConsignments($type, $status, $outletId, $after, $before, $pageSize));
	}


	public function createConsignment(): Response
	{
		return $this->connector->send(new CreateConsignment());
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function getConsignmentById(string $consignmentId): Response
	{
		return $this->connector->send(new GetConsignmentById($consignmentId));
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function updateConsignmentById(string $consignmentId): Response
	{
		return $this->connector->send(new UpdateConsignmentById($consignmentId));
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function deleteConsignmentById(string $consignmentId): Response
	{
		return $this->connector->send(new DeleteConsignmentById($consignmentId));
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function listConsignmentTotals(string $consignmentId): Response
	{
		return $this->connector->send(new ListConsignmentTotals($consignmentId));
	}
}
