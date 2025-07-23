<?php

namespace LightSpeed\XSeries\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * SearchPromotions
 *
 * This endpoint can be used to find promotions matching specific criteria.
 */
class SearchPromotions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/promotions/search";
	}


	/**
	 * @param null|string $scope Scope of the search
	 * @param null|string $name Part of promotion's name being searched
	 * @param null|string $startTime Only show promotions that have a start time after or equal to this
	 * @param null|string $endTime Only show promotions that have an end time before or equal to this
	 * @param null|array $outletId Only show promotions linked to one or many of the outlets specified here
	 * @param null|string $orderBy Sort the result by this field
	 * @param null|string $direction Sort direction
	 * @param null|int $offset Offset
	 * @param null|int $pageSize Number of results per page
	 */
	public function __construct(
		protected ?string $scope = null,
		protected ?string $name = null,
		protected ?string $startTime = null,
		protected ?string $endTime = null,
		protected ?array $outletId = null,
		protected ?string $orderBy = null,
		protected ?string $direction = null,
		protected ?int $offset = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'scope' => $this->scope,
			'name' => $this->name,
			'start_time' => $this->startTime,
			'end_time' => $this->endTime,
			'outlet_id' => $this->outletId,
			'order_by' => $this->orderBy,
			'direction' => $this->direction,
			'offset' => $this->offset,
			'page_size' => $this->pageSize,
		]);
	}
}
