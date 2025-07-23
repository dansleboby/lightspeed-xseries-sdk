<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List price books
 */
class ListPriceBooks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/3.0/price_books";
	}


	/**
	 * @param null|string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param null|string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param null|string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param null|string $order (string) Field used to sort the results.
	 * @param null|string $direction (string) Sort results direction. ASC or DESC.
	 * @param null|string $deleted (boolean) Include (true) or exclude (false) deleted price books. Default value is false.
	 * @param null|string $customerGroupId (stgring) Filter the list and show only price books linked to the specified Customer Group.
	 */
	public function __construct(
		protected ?string $after = null,
		protected ?string $before = null,
		protected ?string $pageSize = null,
		protected ?string $order = null,
		protected ?string $direction = null,
		protected ?string $deleted = null,
		protected ?string $customerGroupId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'after' => $this->after,
			'before' => $this->before,
			'page_size' => $this->pageSize,
			'order' => $this->order,
			'direction' => $this->direction,
			'deleted' => $this->deleted,
			'customer_group_id' => $this->customerGroupId,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
