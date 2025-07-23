<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ServiceOrders\GetService;
use LightSpeed\XSeries\Requests\ServiceOrders\GetServicesAgendaByOutlet;
use LightSpeed\XSeries\Requests\ServiceOrders\ListServices;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class ServiceOrders extends Resource
{
	/**
	 * @param string $outletId
	 * @param string $limit The maximum number of items to be returned in the response.
	 */
	public function listServices(string $outletId, ?string $limit): Response
	{
		return $this->connector->send(new ListServices($outletId, $limit));
	}


	/**
	 * @param string $serviceId
	 */
	public function getService(string $serviceId): Response
	{
		return $this->connector->send(new GetService($serviceId));
	}


	/**
	 * @param string $outletId
	 * @param string $days The size, in days, of the time window for which the agenda is requested.
	 * @param string $startDate The first date of the time window for which the agenda is requested
	 */
	public function getServicesAgendaByOutlet(string $outletId, ?string $days, ?string $startDate): Response
	{
		return $this->connector->send(new GetServicesAgendaByOutlet($outletId, $days, $startDate));
	}
}
