<?php

namespace LightSpeed\XSeries\Requests\ConsigmentsProducts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Bulk Update product in a consignment
 */
class BulkUpdateProductInConsignment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/consignments/{$this->consignmentId}/bulk";
	}


	/**
	 * @param string $consignmentId
	 * @param null|array $values
	 */
	public function __construct(
		protected string $consignmentId,
		protected ?array $values = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['values' => $this->values]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
