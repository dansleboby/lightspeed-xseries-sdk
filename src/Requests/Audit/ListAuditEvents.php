<?php

namespace LightSpeed\XSeries\Requests\Audit;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List audit events
 */
class ListAuditEvents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/auditlog_events";
	}


	/**
	 * @param null|string $pageSize (string) The size for a single page of results. By default 100 events will be returned.
	 * @param null|string $offset (string) The number of objects to skip.
	 * @param null|string $from (string) The lower limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param null|string $to (string) The upper limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param null|string $order (string) The sorting order for the results. Sorting is done by the `occurred_at` parameter. The default order is descending.
	 * @param null|string $userId (string) The `id` of the user to filter the events by.
	 * @param null|string $type (string) The `type` of the events to be filtered for the response.
	 */
	public function __construct(
		protected ?string $pageSize = null,
		protected ?string $offset = null,
		protected ?string $from = null,
		protected ?string $to = null,
		protected ?string $order = null,
		protected ?string $userId = null,
		protected ?string $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page_size' => $this->pageSize,
			'offset' => $this->offset,
			'from' => $this->from,
			'to' => $this->to,
			'order' => $this->order,
			'user_id' => $this->userId,
			'type' => $this->type,
		]);
	}
}
