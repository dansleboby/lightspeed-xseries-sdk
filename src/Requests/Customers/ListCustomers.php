<?php

namespace LightSpeed\XSeries\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListCustomers
 *
 * Returns a paginated list of customers.
 *
 * To search for customers, please have a look at our [Search
 * endpoint](/reference/search-1) on what is supported.
 */
class ListCustomers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers";
	}


	/**
	 * @param null|int $after The lower limit for the version numbers to be included in the response.
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 * @param null|bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function __construct(
		protected ?int $after = null,
		protected ?int $before = null,
		protected ?int $pageSize = null,
		protected ?bool $deleted = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['after' => $this->after, 'before' => $this->before, 'page_size' => $this->pageSize, 'deleted' => $this->deleted]);
	}
}
