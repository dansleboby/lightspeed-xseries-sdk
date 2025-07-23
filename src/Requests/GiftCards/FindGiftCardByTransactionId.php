<?php

namespace LightSpeed\XSeries\Requests\GiftCards;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Find gift card by transaction id
 */
class FindGiftCardByTransactionId extends Request
{
	protected Method $method = Method::GET;


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
}
