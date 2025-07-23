<?php

namespace LightSpeed\XSeries\Requests\SerialNumbers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a serial number
 */
class CreateSerialNumber extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/serialnumbers";
	}


	/**
	 * @param null|mixed $code
	 * @param null|mixed $productId
	 * @param null|mixed $outletId
	 */
	public function __construct(
		protected mixed $code = null,
		protected mixed $productId = null,
		protected mixed $outletId = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['code' => $this->code, 'product_id' => $this->productId, 'outlet_id' => $this->outletId]);
	}
}
