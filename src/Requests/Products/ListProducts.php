<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListProducts
 *
 * Returns a paginated list of products.
 *
 * To search for products, please have a look at our [Search
 * endpoint](/reference/search-1) on what is supported.
 */
class ListProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products";
	}


	/**
	 * @param null|int $after The lower limit for the version numbers to be included in the response.
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|bool $deleted Indicates whether deleted items should be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 * @param null|string $sku Allows loading a product by one of its SKUs. Note that all other query params are ignored if this is provided.
	 * @param null|string $name Allows loading products with the name provided in this parameter. This query typically retrieves all products from the product family with the provided name. Note that all other query parameters are ignored if this is provided.
	 * @param null|string $familyName Alias for 'name'. Allows loading products that belong to the family with the name provided in this parameter. Note that all other query parameters are ignored if this is provided.
	 */
	public function __construct(
		protected ?int $after = null,
		protected ?int $before = null,
		protected ?bool $deleted = null,
		protected ?int $pageSize = null,
		protected ?string $sku = null,
		protected ?string $name = null,
		protected ?string $familyName = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'after' => $this->after,
			'before' => $this->before,
			'deleted' => $this->deleted,
			'page_size' => $this->pageSize,
			'sku' => $this->sku,
			'name' => $this->name,
			'family_name' => $this->familyName,
		]);
	}
}
