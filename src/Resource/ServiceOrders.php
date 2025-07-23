<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ServiceOrders\GetService;
use LightSpeed\XSeries\Requests\ServiceOrders\GetServicesAgendaByOutlet;
use LightSpeed\XSeries\Requests\ServiceOrders\ListServices;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ServiceOrders extends BaseResource
{
	/**
	 * @param string $outletId
	 * @param string $after The lower limit for the service id to be included in the response. For proper pagination, it needs to be the service id of the last item in the response from your previous request.
	 * @param string $limit The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listServices(
		string $outletId,
		?string $after = null,
		?string $limit = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListServices($outletId, $after, $limit, $accept));
	}


	/**
	 * @param string $serviceId
	 * @param string $accept
	 */
	public function getService(string $serviceId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetService($serviceId, $accept));
	}


	/**
	 * @param string $outletId
	 * @param string $days The size, in days, of the time window for which the agenda is requested.
	 * @param string $startDate The first date of the time window for which the agenda is requested
	 */
	public function getServicesAgendaByOutlet(
		string $outletId,
		?string $days = null,
		?string $startDate = null,
	): Response
	{
		return $this->connector->send(new GetServicesAgendaByOutlet($outletId, $days, $startDate));
	}
}
