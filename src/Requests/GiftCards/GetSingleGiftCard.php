<?php

namespace LightSpeed\XSeries\Requests\GiftCards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single gift card
 */
class GetSingleGiftCard extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/gift_cards/{$this->number}";
	}


	/**
	 * @param string $number
	 */
	public function __construct(
		protected string $number,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
