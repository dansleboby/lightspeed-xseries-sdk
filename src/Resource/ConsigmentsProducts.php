<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ConsigmentsProducts\AddProductToConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\BulkUpdateProductInConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\DeleteItemFromConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\ListAllProductsForSpecificConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\UpdateProductInConsignment;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class ConsigmentsProducts extends Resource
{
	/**
	 * @param string $consignmentId
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (Integer) The maximum number of items to be returned in the response.
	 */
	public function listAllProductsForSpecificConsignment(
		string $consignmentId,
		?string $before,
		?string $pageSize,
	): Response
	{
		return $this->connector->send(new ListAllProductsForSpecificConsignment($consignmentId, $before, $pageSize));
	}


	/**
	 * @param string $consignmentId
	 * @param mixed $productId
	 * @param mixed $productSku
	 * @param mixed $count
	 * @param mixed $received
	 * @param mixed $cost
	 * @param mixed $isIncluded
	 * @param mixed $status
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $version
	 */
	public function addProductToConsignment(
		string $consignmentId,
		mixed $productId,
		mixed $productSku,
		mixed $count,
		mixed $received,
		mixed $cost,
		mixed $isIncluded,
		mixed $status,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $deletedAt,
		mixed $version,
	): Response
	{
		return $this->connector->send(new AddProductToConsignment($consignmentId, $productId, $productSku, $count, $received, $cost, $isIncluded, $status, $createdAt, $updatedAt, $deletedAt, $version));
	}


	/**
	 * @param string $consignmentId
	 * @param string $productId
	 * @param mixed $productId
	 * @param mixed $productSku
	 * @param mixed $count
	 * @param mixed $received
	 * @param mixed $cost
	 * @param mixed $isIncluded
	 * @param mixed $status
	 * @param mixed $createdAt
	 * @param mixed $updatedAt
	 * @param mixed $deletedAt
	 * @param mixed $version
	 */
	public function updateProductInConsignment(
		string $consignmentId,
		mixed $productId,
		mixed $productSku,
		mixed $count,
		mixed $received,
		mixed $cost,
		mixed $isIncluded,
		mixed $status,
		mixed $createdAt,
		mixed $updatedAt,
		mixed $deletedAt,
		mixed $version,
	): Response
	{
		return $this->connector->send(new UpdateProductInConsignment($consignmentId, $productId, $productId, $productSku, $count, $received, $cost, $isIncluded, $status, $createdAt, $updatedAt, $deletedAt, $version));
	}


	/**
	 * @param string $consignmentId
	 * @param string $productId
	 */
	public function deleteItemFromConsignment(string $consignmentId, string $productId): Response
	{
		return $this->connector->send(new DeleteItemFromConsignment($consignmentId, $productId));
	}


	/**
	 * @param string $consignmentId
	 * @param array $values
	 */
	public function bulkUpdateProductInConsignment(string $consignmentId, ?array $values): Response
	{
		return $this->connector->send(new BulkUpdateProductInConsignment($consignmentId, $values));
	}
}
