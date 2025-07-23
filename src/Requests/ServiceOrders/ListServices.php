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
	 * @param null|string $limit The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected string $outletId,
		protected ?string $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit]);
	}
}
