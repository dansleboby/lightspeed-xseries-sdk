<?php

namespace LightSpeed\XSeries\Requests\ProductCategories;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateUpdateProductCategories
 */
class CreateUpdateProductCategories extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/product_categories/bulk";
	}


	public function __construct()
	{
	}
}
