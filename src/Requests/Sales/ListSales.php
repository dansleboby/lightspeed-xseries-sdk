<?php

namespace LightSpeed\XSeries\Requests\Sales;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List sales
 */
class ListSales extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/sales";
	}


	/**
	 * @param null|string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param null|string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param null|string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?string $after = null,
		protected ?string $before = null,
		protected ?string $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['after' => $this->after, 'before' => $this->before, 'page_size' => $this->pageSize]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
