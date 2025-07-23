<?php

namespace LightSpeed\XSeries\Requests\ServiceOrders;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListServiceItems
 *
 * Returns a paginated list of customer's service items.
 */
class ListServiceItems extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/service_items/customer/{$this->customerId}";
	}


	/**
	 * @param string $customerId The customer id
	 * @param null|int $after The lower limit for the service id to be included in the response. For proper pagination, it needs to be the item id of the last item in the response from your previous request.
	 * @param null|int $limit The maximum number of items to be returned in the response.
	 */
	public function __construct(
		protected string $customerId,
		protected ?int $after = null,
		protected ?int $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['after' => $this->after, 'limit' => $this->limit]);
	}
}
