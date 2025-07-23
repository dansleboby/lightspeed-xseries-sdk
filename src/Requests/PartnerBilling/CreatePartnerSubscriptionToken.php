<?php

namespace LightSpeed\XSeries\Requests\PartnerBilling;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a partner subscription token
 */
class CreatePartnerSubscriptionToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/partner/billing/token";
	}


	/**
	 * @param null|mixed $priceHandle
	 * @param null|mixed $productHandle
	 * @param null|mixed $returnUrl
	 * @param null|mixed $components
	 * @param null|mixed $couponCode
	 */
	public function __construct(
		protected mixed $priceHandle = null,
		protected mixed $productHandle = null,
		protected mixed $returnUrl = null,
		protected mixed $components = null,
		protected mixed $couponCode = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'price_handle' => $this->priceHandle,
			'product_handle' => $this->productHandle,
			'return_url' => $this->returnUrl,
			'components' => $this->components,
			'coupon_code' => $this->couponCode,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
