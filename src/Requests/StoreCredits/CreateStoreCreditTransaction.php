<?php

namespace LightSpeed\XSeries\Requests\StoreCredits;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a store credit transaction
 */
class CreateStoreCreditTransaction extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/store_credits/{$this->customerId}/transactions";
	}


	/**
	 * @param string $customerId
	 * @param null|mixed $amount
	 * @param null|mixed $clientId
	 * @param null|mixed $storeCreditCustomerId
	 * @param null|mixed $type
	 * @param null|mixed $notes
	 * @param null|mixed $userId
	 */
	public function __construct(
		protected string $customerId,
		protected mixed $amount = null,
		protected mixed $clientId = null,
		protected mixed $storeCreditCustomerId = null,
		protected mixed $type = null,
		protected mixed $notes = null,
		protected mixed $userId = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'amount' => $this->amount,
			'client_id' => $this->clientId,
			'store_credit_customer_id' => $this->storeCreditCustomerId,
			'type' => $this->type,
			'notes' => $this->notes,
			'user_id' => $this->userId,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
