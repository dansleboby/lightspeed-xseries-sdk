<?php

namespace LightSpeed\XSeries\Requests\Fulfillment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Fulfil a sale
 */
class FulfilSale extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/sales/{$this->saleId}/fulfill";
	}


	/**
	 * @param string $saleId
	 */
	public function __construct(
		protected string $saleId,
	) {
	}
}
