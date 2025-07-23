<?php

namespace LightSpeed\XSeries\Requests\ProductImages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Set image position
 */
class SetImagePosition extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/product_images/{$this->productImageId}";
	}


	/**
	 * @param string $productImageId
	 * @param null|mixed $position
	 */
	public function __construct(
		protected string $productImageId,
		protected mixed $position = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['position' => $this->position]);
	}
}
