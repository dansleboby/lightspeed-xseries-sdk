<?php

namespace LightSpeed\XSeries\Requests\PromoCodes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete promo codes
 */
class DeletePromoCodes extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/promocode/bulk";
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


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
