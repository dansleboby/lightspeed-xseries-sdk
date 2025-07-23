<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Audit\ListAuditEvents;
use LightSpeed\XSeries\Requests\Audit\ListSecurityEventsForCurrentUser;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Audit extends Resource
{
	public function listSecurityEventsForCurrentUser(): Response
	{
		return $this->connector->send(new ListSecurityEventsForCurrentUser());
	}


	/**
	 * @param string $pageSize (string) The size for a single page of results. By default 100 events will be returned.
	 * @param string $offset (string) The number of objects to skip.
	 * @param string $from (string) The lower limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param string $to (string) The upper limit for the `occurred_at` attribute. to be included in the response. The date and time from needs to be in isoformat.
	 * @param string $order (string) The sorting order for the results. Sorting is done by the `occurred_at` parameter. The default order is descending.
	 * @param string $userId (string) The `id` of the user to filter the events by.
	 * @param string $type (string) The `type` of the events to be filtered for the response.
	 */
	public function listAuditEvents(
		?string $pageSize,
		?string $offset,
		?string $from,
		?string $to,
		?string $order,
		?string $userId,
		?string $type,
	): Response
	{
		return $this->connector->send(new ListAuditEvents($pageSize, $offset, $from, $to, $order, $userId, $type));
	}
}
