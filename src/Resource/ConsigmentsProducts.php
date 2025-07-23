<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ConsigmentsProducts\AddProductToConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\BulkUpdateProductInConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\DeleteItemFromConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\ListAllProductsForSpecificConsignment;
use LightSpeed\XSeries\Requests\ConsigmentsProducts\UpdateProductInConsignment;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ConsigmentsProducts extends BaseResource
{
	/**
	 * @param string $consignmentId
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (Integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listAllProductsForSpecificConsignment(
		string $consignmentId,
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListAllProductsForSpecificConsignment($consignmentId, $after, $before, $pageSize, $accept));
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
	 * @param string $accept
	 */
	public function addProductToConsignment(
		string $consignmentId,
		mixed $productId = null,
		mixed $productSku = null,
		mixed $count = null,
		mixed $received = null,
		mixed $cost = null,
		mixed $isIncluded = null,
		mixed $status = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $deletedAt = null,
		mixed $version = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new AddProductToConsignment($consignmentId, $productId, $productSku, $count, $received, $cost, $isIncluded, $status, $createdAt, $updatedAt, $deletedAt, $version, $accept));
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
	 * @param string $accept
	 */
	public function updateProductInConsignment(
		string $consignmentId,
		mixed $productId = null,
		mixed $productSku = null,
		mixed $count = null,
		mixed $received = null,
		mixed $cost = null,
		mixed $isIncluded = null,
		mixed $status = null,
		mixed $createdAt = null,
		mixed $updatedAt = null,
		mixed $deletedAt = null,
		mixed $version = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdateProductInConsignment($consignmentId, $productId, $productId, $productSku, $count, $received, $cost, $isIncluded, $status, $createdAt, $updatedAt, $deletedAt, $version, $accept));
	}


	/**
	 * @param string $consignmentId
	 * @param string $productId
	 * @param string $accept
	 */
	public function deleteItemFromConsignment(string $consignmentId, string $productId, ?string $accept = null): Response
	{
		return $this->connector->send(new DeleteItemFromConsignment($consignmentId, $productId, $accept));
	}


	/**
	 * @param string $consignmentId
	 * @param array $values
	 * @param string $accept
	 */
	public function bulkUpdateProductInConsignment(
		string $consignmentId,
		?array $values = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new BulkUpdateProductInConsignment($consignmentId, $values, $accept));
	}
}
