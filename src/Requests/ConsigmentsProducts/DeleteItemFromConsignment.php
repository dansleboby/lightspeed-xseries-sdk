<?php

namespace LightSpeed\XSeries\Requests\ConsigmentsProducts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an item from a consignment
 */
class DeleteItemFromConsignment extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/consignments/{$this->consignmentId}/products/{$this->productId}";
	}


	/**
	 * @param string $consignmentId
	 * @param string $productId
	 */
	public function __construct(
		protected string $consignmentId,
		protected string $productId,
	) {
	}
}
