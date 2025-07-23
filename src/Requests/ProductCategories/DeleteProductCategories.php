<?php

namespace LightSpeed\XSeries\Requests\ProductCategories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductCategories
 *
 * Delete a list of categories.
 * If the category is a parent or root, the descendent categories also
 * get deleted.
 * Products associated to the deleted category are assigned to the parent, or if the
 * deleted category is a root, the products are unassigned.
 */
class DeleteProductCategories extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/product_categories/bulk";
	}


	public function __construct()
	{
	}
}
