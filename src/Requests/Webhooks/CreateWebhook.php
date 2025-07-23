<?php

namespace LightSpeed\XSeries\Requests\Webhooks;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a webhook
 */
class CreateWebhook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/webhooks";
	}


	/**
	 * @param null|mixed $id
	 * @param null|mixed $retailerId
	 * @param null|mixed $userId
	 * @param null|mixed $url
	 * @param null|mixed $active
	 * @param null|mixed $type
	 */
	public function __construct(
		protected mixed $id = null,
		protected mixed $retailerId = null,
		protected mixed $userId = null,
		protected mixed $url = null,
		protected mixed $active = null,
		protected mixed $type = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'id' => $this->id,
			'retailer_id' => $this->retailerId,
			'user_id' => $this->userId,
			'url' => $this->url,
			'active' => $this->active,
			'type' => $this->type,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
