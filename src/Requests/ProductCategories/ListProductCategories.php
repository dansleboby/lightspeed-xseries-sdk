<?php

namespace LightSpeed\XSeries\Requests\ProductCategories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListProductCategories
 */
class ListProductCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/product_categories";
	}


	/**
	 * @param null|string $parent If parent is an id, it filters the list of categories that belongs to the given category. If parent is "none", it filters  categories for root categories only.
	 * @param null|string $include Defaults to "family" * `family` - Include all categories in the hierarchy. * `children` - Include only direct children.
	 * @param null|int $pageSize The total number of categories to return. Default is 1000.
	 * @param null|string $after The category id to get the next set of paginated results.
	 */
	public function __construct(
		protected ?string $parent = null,
		protected ?string $include = null,
		protected ?int $pageSize = null,
		protected ?string $after = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['parent' => $this->parent, 'include' => $this->include, 'page_size' => $this->pageSize, 'after' => $this->after]);
	}
}
