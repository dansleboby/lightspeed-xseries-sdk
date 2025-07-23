<?php

namespace LightSpeed\XSeries\Requests\Inventory;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListInventoryRecords
 *
 * Returns a paginated list of inventory records.
 */
class ListInventoryRecords extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/inventory";
	}


	/**
	 * @param null|int $after The lower limit for the version numbers to be included in the response.
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?int $after = null,
		protected ?int $before = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['after' => $this->after, 'before' => $this->before, 'page_size' => $this->pageSize]);
	}
}
