<?php

namespace LightSpeed\XSeries\Requests\GiftCards;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create gift card
 */
class CreateGiftCard extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/gift_cards";
	}


	/**
	 * @param null|mixed $amount
	 * @param null|mixed $number
	 * @param null|mixed $userId
	 * @param null|mixed $expiresAt
	 * @param null|mixed $timeZone
	 */
	public function __construct(
		protected mixed $amount = null,
		protected mixed $number = null,
		protected mixed $userId = null,
		protected mixed $expiresAt = null,
		protected mixed $timeZone = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'amount' => $this->amount,
			'number' => $this->number,
			'user_id' => $this->userId,
			'expires_at' => $this->expiresAt,
			'time_zone' => $this->timeZone,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
