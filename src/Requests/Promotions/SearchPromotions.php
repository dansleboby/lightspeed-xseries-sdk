<?php

namespace LightSpeed\XSeries\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search promotions
 */
class SearchPromotions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/promotions/search";
	}


	/**
	 * @param null|string $scope (string) Scope of the search
	 * @param null|string $name (string) Part of promotion's name being searched
	 * @param null|string $startDate (string) Only show promotions that have a start date after or equal to this
	 * @param null|string $endDate (string) Only show promotions that have an end date before or equal to this
	 * @param null|string $outletId (array of strings) Only show promotions linked to one or many of the outlets specified here
	 * @param null|string $direction (string) Sort direction
	 * @param null|string $offset (integer) Offset
	 * @param null|string $pageSize (integer) Number of results per page
	 */
	public function __construct(
		protected ?string $scope = null,
		protected ?string $name = null,
		protected ?string $startDate = null,
		protected ?string $endDate = null,
		protected ?string $outletId = null,
		protected ?string $direction = null,
		protected ?string $offset = null,
		protected ?string $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'scope' => $this->scope,
			'name' => $this->name,
			'start_date' => $this->startDate,
			'end_date' => $this->endDate,
			'outlet_id' => $this->outletId,
			'direction' => $this->direction,
			'offset' => $this->offset,
			'page_size' => $this->pageSize,
		]);
	}
}
