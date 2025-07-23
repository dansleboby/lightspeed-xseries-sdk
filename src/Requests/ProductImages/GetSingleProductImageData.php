<?php

namespace LightSpeed\XSeries\Requests\ProductImages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single product image data
 */
class GetSingleProductImageData extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/product_images/{$this->productImageId}";
	}


	/**
	 * @param string $productImageId
	 */
	public function __construct(
		protected string $productImageId,
	) {
	}
}
