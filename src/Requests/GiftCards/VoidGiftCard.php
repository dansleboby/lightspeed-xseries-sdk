<?php

namespace LightSpeed\XSeries\Requests\GiftCards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Void gift card
 */
class VoidGiftCard extends Request
{
	protected Method $method = Method::DELETE;


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
}
