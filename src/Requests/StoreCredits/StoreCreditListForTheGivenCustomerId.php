<?php

namespace LightSpeed\XSeries\Requests\StoreCredits;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Store credit list for the given customer id
 */
class StoreCreditListForTheGivenCustomerId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/store_credits/{$this->customerId}";
	}


	/**
	 * @param string $customerId
	 * @param null|string $includes (string) Include supplementary data. The only valid value for includes[] is 'customer'.
	 */
	public function __construct(
		protected string $customerId,
		protected ?string $includes = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['includes[]' => $this->includes]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
