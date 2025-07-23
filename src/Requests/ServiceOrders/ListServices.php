<?php

namespace LightSpeed\XSeries\Requests\ServiceOrders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List services
 */
class ListServices extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/services_agenda/outlet/{$this->outletId}/services";
	}


	/**
	 * @param string $outletId
	 * @param null|string $after The lower limit for the service id to be included in the response. For proper pagination, it needs to be the service id of the last item in the response from your previous request.
	 * @param null|string $limit The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected string $outletId,
		protected ?string $after = null,
		protected ?string $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['after' => $this->after, 'limit' => $this->limit]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
