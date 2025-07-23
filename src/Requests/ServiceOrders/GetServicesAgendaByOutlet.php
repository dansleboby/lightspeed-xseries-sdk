<?php

namespace LightSpeed\XSeries\Requests\ServiceOrders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Services Agenda By Outlet
 */
class GetServicesAgendaByOutlet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/services_agenda/outlet/{$this->outletId}";
	}


	/**
	 * @param string $outletId
	 * @param null|string $days The size, in days, of the time window for which the agenda is requested.
	 * @param null|string $startDate The first date of the time window for which the agenda is requested
	 */
	public function __construct(
		protected string $outletId,
		protected ?string $days = null,
		protected ?string $startDate = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['days' => $this->days, 'start_date' => $this->startDate]);
	}
}
