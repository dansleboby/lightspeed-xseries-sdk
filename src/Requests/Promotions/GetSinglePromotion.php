<?php

namespace LightSpeed\XSeries\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single promotion
 */
class GetSinglePromotion extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/promotions/{$this->promotionId}";
	}


	/**
	 * @param string $promotionId
	 */
	public function __construct(
		protected string $promotionId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
