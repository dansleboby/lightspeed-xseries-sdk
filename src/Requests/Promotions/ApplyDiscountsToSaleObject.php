<?php

namespace LightSpeed\XSeries\Requests\Promotions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Apply discounts to a sale object
 */
class ApplyDiscountsToSaleObject extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/discount";
	}


	/**
	 * @param null|mixed $customer
	 * @param null|mixed $sale
	 * @param null|mixed $promoCode
	 * @param null|mixed $channel
	 * @param null|mixed $outletId
	 * @param null|mixed $isTaxInclusive
	 */
	public function __construct(
		protected mixed $customer = null,
		protected mixed $sale = null,
		protected mixed $promoCode = null,
		protected mixed $channel = null,
		protected mixed $outletId = null,
		protected mixed $isTaxInclusive = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'customer' => $this->customer,
			'sale' => $this->sale,
			'promo_code' => $this->promoCode,
			'channel' => $this->channel,
			'outlet_id' => $this->outletId,
			'is_tax_inclusive' => $this->isTaxInclusive,
		]);
	}
}
