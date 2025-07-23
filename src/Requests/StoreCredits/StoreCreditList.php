<?php

namespace LightSpeed\XSeries\Requests\StoreCredits;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Store credit list
 */
class StoreCreditList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/store_credits";
	}


	/**
	 * @param null|string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param null|string $includes (string) Include supplementary data. The only valid value for includes[] is 'customer'.
	 */
	public function __construct(
		protected ?string $pageSize = null,
		protected ?string $includes = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page_size' => $this->pageSize, 'includes[]' => $this->includes]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
