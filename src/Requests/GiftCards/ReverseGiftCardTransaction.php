<?php

namespace LightSpeed\XSeries\Requests\GiftCards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Reverse gift card transaction
 */
class ReverseGiftCardTransaction extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/gift_cards/transactions/{$this->transactionId}";
	}


	/**
	 * @param string $transactionId
	 */
	public function __construct(
		protected string $transactionId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
