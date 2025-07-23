<?php

namespace LightSpeed\XSeries\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get products for a promotion
 */
class GetProductsForPromotion extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/promotions/{$this->promotionId}/products";
	}


	/**
	 * @param string $promotionId
	 */
	public function __construct(
		protected string $promotionId,
	) {
	}
}
