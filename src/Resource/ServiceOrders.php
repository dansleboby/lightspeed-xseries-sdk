<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ServiceOrders\GetAgendaOutletId;
use LightSpeed\XSeries\Requests\ServiceOrders\GetService;
use LightSpeed\XSeries\Requests\ServiceOrders\ListServiceItems;
use LightSpeed\XSeries\Requests\ServiceOrders\ListServices;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ServiceOrders extends BaseResource
{
	/**
	 * @param int $after The lower limit for the service id to be included in the response. For proper pagination, it needs to be the service id of the last item in the response from your previous request.
	 * @param int $limit The maximum number of items to be returned in the response.
	 */
	public function listServices(?int $after = null, ?int $limit = null): Response
	{
		return $this->connector->send(new ListServices($after, $limit));
	}


	/**
	 * @param string $customerId The customer id
	 * @param int $after The lower limit for the service id to be included in the response. For proper pagination, it needs to be the item id of the last item in the response from your previous request.
	 * @param int $limit The maximum number of items to be returned in the response.
	 */
	public function listServiceItems(string $customerId, ?int $after = null, ?int $limit = null): Response
	{
		return $this->connector->send(new ListServiceItems($customerId, $after, $limit));
	}


	/**
	 * @param string $serviceId ID of the service to get
	 */
	public function getService(string $serviceId): Response
	{
		return $this->connector->send(new GetService($serviceId));
	}


	/**
	 * @param string $outletId
	 */
	public function getAgendaOutletId(string $outletId): Response
	{
		return $this->connector->send(new GetAgendaOutletId($outletId));
	}
}
