<?php

namespace LightSpeed\XSeries\Requests\Inventory;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List inventory records
 */
class ListInventoryRecords extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/inventory";
	}


	/**
	 * @param null|string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param null|string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?string $before = null,
		protected ?string $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['before' => $this->before, 'page_size' => $this->pageSize]);
	}
}
