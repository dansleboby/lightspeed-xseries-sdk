<?php

namespace LightSpeed\XSeries\Requests\Outlets;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List outlets
 */
class ListOutlets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/outlets";
	}


	/**
	 * @param null|string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param null|string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param null|string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param null|string $deleted (bool) Whether to include deleted resources.
	 */
	public function __construct(
		protected ?string $after = null,
		protected ?string $before = null,
		protected ?string $pageSize = null,
		protected ?string $deleted = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['after' => $this->after, 'before' => $this->before, 'page_size' => $this->pageSize, 'deleted' => $this->deleted]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
