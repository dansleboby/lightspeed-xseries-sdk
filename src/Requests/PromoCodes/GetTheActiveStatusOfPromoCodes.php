<?php

namespace LightSpeed\XSeries\Requests\PromoCodes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get the active status of promo codes
 */
class GetTheActiveStatusOfPromoCodes extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/promocode/bulk/active";
	}


	/**
	 * @param null|array $values
	 */
	public function __construct(
		protected ?array $values = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['values' => $this->values]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
