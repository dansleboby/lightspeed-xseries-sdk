<?php

namespace LightSpeed\XSeries\Requests\ConsigmentsProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a product in a consignment
 */
class UpdateProductInConsignment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/consignments/{$this->consignmentId}/products/{$this->productId}";
	}


	/**
	 * @param string $consignmentId
	 * @param string $productId
	 * @param null|mixed $productId
	 * @param null|mixed $productSku
	 * @param null|mixed $count
	 * @param null|mixed $received
	 * @param null|mixed $cost
	 * @param null|mixed $isIncluded
	 * @param null|mixed $status
	 * @param null|mixed $createdAt
	 * @param null|mixed $updatedAt
	 * @param null|mixed $deletedAt
	 * @param null|mixed $version
	 */
	public function __construct(
		protected string $consignmentId,
		protected mixed $productId = null,
		protected mixed $productSku = null,
		protected mixed $count = null,
		protected mixed $received = null,
		protected mixed $cost = null,
		protected mixed $isIncluded = null,
		protected mixed $status = null,
		protected mixed $createdAt = null,
		protected mixed $updatedAt = null,
		protected mixed $deletedAt = null,
		protected mixed $version = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'product_id' => $this->productId,
			'product_sku' => $this->productSku,
			'count' => $this->count,
			'received' => $this->received,
			'cost' => $this->cost,
			'is_included' => $this->isIncluded,
			'status' => $this->status,
			'created_at' => $this->createdAt,
			'updated_at' => $this->updatedAt,
			'deleted_at' => $this->deletedAt,
			'version' => $this->version,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
