<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a single price book
 */
class CreateSinglePriceBook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/3.0/price_books";
	}


	/**
	 * @param null|mixed $customerGroupIds
	 * @param null|mixed $outletIds
	 * @param null|mixed $name
	 * @param null|mixed $validFrom
	 * @param null|mixed $validTo
	 * @param null|mixed $restrictToPlatform
	 */
	public function __construct(
		protected mixed $customerGroupIds = null,
		protected mixed $outletIds = null,
		protected mixed $name = null,
		protected mixed $validFrom = null,
		protected mixed $validTo = null,
		protected mixed $restrictToPlatform = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'customer_group_ids' => $this->customerGroupIds,
			'outlet_ids' => $this->outletIds,
			'name' => $this->name,
			'valid_from' => $this->validFrom,
			'valid_to' => $this->validTo,
			'restrict_to_platform' => $this->restrictToPlatform,
		]);
	}
}
