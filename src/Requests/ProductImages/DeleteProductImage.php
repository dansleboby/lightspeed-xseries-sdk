<?php

namespace LightSpeed\XSeries\Requests\ProductImages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete product image
 */
class DeleteProductImage extends Request
{
	protected Method $method = Method::DELETE;


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
