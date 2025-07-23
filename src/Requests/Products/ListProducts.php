<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List Products
 */
class ListProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/3.0/products";
	}


	/**
	 * @param null|string $sinceVersion (integer) Only show the products with version number greater than the value of since_version.
	 * @param null|string $pageSize (integer) The number of products to show per page.
	 * @param null|string $includeDeleted (boolean) Whether to include deleted products or not.
	 */
	public function __construct(
		protected ?string $sinceVersion = null,
		protected ?string $pageSize = null,
		protected ?string $includeDeleted = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['since_version' => $this->sinceVersion, 'page_size' => $this->pageSize, 'include_deleted' => $this->includeDeleted]);
	}
}
