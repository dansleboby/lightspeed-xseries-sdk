<?php

namespace LightSpeed\XSeries\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List promotions
 */
class ListPromotions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/promotions";
	}


	/**
	 * @param null|string $endTimeTo Upper limit for the promotion end date as UTC timestamp. Format: 2020-08-08T12:00:00Z.
	 * @param null|string $endTimeFrom Lower limit for the promotion end date as UTC timestamp. Format: 2020-08-08T12:00:00Z.
	 * @param null|string $pageSize The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?string $endTimeTo = null,
		protected ?string $endTimeFrom = null,
		protected ?string $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['end_time_to' => $this->endTimeTo, 'end_time_from' => $this->endTimeFrom, 'page_size' => $this->pageSize]);
	}
}
