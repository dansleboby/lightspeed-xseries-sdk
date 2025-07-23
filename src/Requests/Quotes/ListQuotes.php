<?php

namespace LightSpeed\XSeries\Requests\Quotes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List quotes
 */
class ListQuotes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/quotes";
	}


	/**
	 * @param null|string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param null|string $after (int64) The lower limit for the version numbers to be included in the response.
	 */
	public function __construct(
		protected ?string $pageSize = null,
		protected ?string $after = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page_size' => $this->pageSize, 'after' => $this->after]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
