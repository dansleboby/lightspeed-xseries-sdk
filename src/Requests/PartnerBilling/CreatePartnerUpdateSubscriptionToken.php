<?php

namespace LightSpeed\XSeries\Requests\PartnerBilling;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a partner update subscription token
 */
class CreatePartnerUpdateSubscriptionToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/partner/billing/update-subscription/token";
	}


	/**
	 * @param null|mixed $returnUrl
	 * @param null|mixed $components
	 * @param null|mixed $priceHandle
	 * @param null|mixed $productHandle
	 */
	public function __construct(
		protected mixed $returnUrl = null,
		protected mixed $components = null,
		protected mixed $priceHandle = null,
		protected mixed $productHandle = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'return_url' => $this->returnUrl,
			'components' => $this->components,
			'price_handle' => $this->priceHandle,
			'product_handle' => $this->productHandle,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
