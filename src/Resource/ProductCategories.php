<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ProductCategories\CreateUpdateProductCategories;
use LightSpeed\XSeries\Requests\ProductCategories\DeleteProductCategories;
use LightSpeed\XSeries\Requests\ProductCategories\ListProductCategories;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ProductCategories extends BaseResource
{
	/**
	 * @param string $parent If parent is an id, it filters the list of categories that belongs to the given category. If parent is "none", it filters  categories for root categories only.
	 * @param string $include Defaults to "family" * `family` - Include all categories in the hierarchy. * `children` - Include only direct children.
	 * @param int $pageSize The total number of categories to return. Default is 1000.
	 * @param string $after The category id to get the next set of paginated results.
	 */
	public function listProductCategories(
		?string $parent = null,
		?string $include = null,
		?int $pageSize = null,
		?string $after = null,
	): Response
	{
		return $this->connector->send(new ListProductCategories($parent, $include, $pageSize, $after));
	}


	public function createUpdateProductCategories(): Response
	{
		return $this->connector->send(new CreateUpdateProductCategories());
	}


	public function deleteProductCategories(): Response
	{
		return $this->connector->send(new DeleteProductCategories());
	}
}
