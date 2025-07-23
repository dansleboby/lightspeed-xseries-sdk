<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ConsignmentProducts\CreateConsignmentProduct;
use LightSpeed\XSeries\Requests\ConsignmentProducts\CreateOrUpdateConsignmentProducts;
use LightSpeed\XSeries\Requests\ConsignmentProducts\DeleteProductFromConsignment;
use LightSpeed\XSeries\Requests\ConsignmentProducts\ListProductsByConsignmentId;
use LightSpeed\XSeries\Requests\ConsignmentProducts\UpdateProductInConsignment;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ConsignmentProducts extends BaseResource
{
	/**
	 * @param string $consignmentId The consignment id
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listProductsByConsignmentId(
		string $consignmentId,
		?int $after = null,
		?int $before = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new ListProductsByConsignmentId($consignmentId, $after, $before, $pageSize));
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function createConsignmentProduct(string $consignmentId): Response
	{
		return $this->connector->send(new CreateConsignmentProduct($consignmentId));
	}


	/**
	 * @param string $consignmentId The consignment id to be updated.
	 * @param string $productId The product id of the product to be added to the consignment.
	 */
	public function updateProductInConsignment(string $consignmentId, string $productId): Response
	{
		return $this->connector->send(new UpdateProductInConsignment($consignmentId, $productId));
	}


	/**
	 * @param string $consignmentId The consignment id to be updated.
	 * @param string $productId The product id of the product to be added to the consignment.
	 */
	public function deleteProductFromConsignment(string $consignmentId, string $productId): Response
	{
		return $this->connector->send(new DeleteProductFromConsignment($consignmentId, $productId));
	}


	/**
	 * @param string $consignmentId The consignment id
	 */
	public function createOrUpdateConsignmentProducts(string $consignmentId): Response
	{
		return $this->connector->send(new CreateOrUpdateConsignmentProducts($consignmentId));
	}
}
