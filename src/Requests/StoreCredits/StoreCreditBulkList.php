<?php

namespace LightSpeed\XSeries\Requests\StoreCredits;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Store credit bulk list
 */
class StoreCreditBulkList extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/store_credits/bulk";
	}


	/**
	 * @param null|array $values
	 */
	public function __construct(
		protected ?array $values = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['values' => $this->values]);
	}
}
