<?php

namespace LightSpeed\XSeries\Requests\Products;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload an image
 */
class UploadImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/products/{$this->productId}/actions/image_upload";
	}


	/**
	 * @param string $productId
	 * @param null|mixed $image
	 */
	public function __construct(
		protected string $productId,
		protected mixed $image = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['image' => $this->image]);
	}
}
