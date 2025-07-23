<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Audit\ListAuditEvents;
use LightSpeed\XSeries\Requests\Audit\ListSecurityEventsForCurrentUser;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Audit extends BaseResource
{
	/**
	 * @param string $accept
	 */
	public function listSecurityEventsForCurrentUser(?string $accept = null): Response
	{
		return $this->connector->send(new ListSecurityEventsForCurrentUser($accept));
	}


	/**
	 * @param string $pageSize (string) The size for a single page of results. By default 100 events will be returned.
	 * @param string $offset (string) The number of objects to skip.
	 * @param string $from (string) The lower limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param string $to (string) The upper limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param string $order (string) The sorting order for the results. Sorting is done by the `occurred_at` parameter. The default order is descending.
	 * @param string $userId (string) The `id` of the user to filter the events by.
	 * @param string $type (string) The `type` of the events to be filtered for the response.
	 * @param string $accept
	 */
	public function listAuditEvents(
		?string $pageSize = null,
		?string $offset = null,
		?string $from = null,
		?string $to = null,
		?string $order = null,
		?string $userId = null,
		?string $type = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListAuditEvents($pageSize, $offset, $from, $to, $order, $userId, $type, $accept));
	}
}
