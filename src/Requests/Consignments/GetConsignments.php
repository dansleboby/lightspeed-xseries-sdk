<?php

namespace LightSpeed\XSeries\Requests\Consignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetConsignments
 *
 * Return a paginated list of consignments.
 */
class GetConsignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consignments";
	}


	/**
	 * @param null|string $type The consignment type to search for.
	 * @param null|string $status The consignment status to search for.
	 * @param null|string $outletId Filter response by the ID of the outlet associated with the consignments.
	 * @param null|int $after The lower limit for the version numbers to be included in the response.
	 * @param null|int $before The upper limit for the version numbers to be included in the response.
	 * @param null|int $pageSize The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected ?string $type = null,
		protected ?string $status = null,
		protected ?string $outletId = null,
		protected ?int $after = null,
		protected ?int $before = null,
		protected ?int $pageSize = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'type' => $this->type,
			'status' => $this->status,
			'outlet_id' => $this->outletId,
			'after' => $this->after,
			'before' => $this->before,
			'page_size' => $this->pageSize,
		]);
	}
}
