<?php

namespace LightSpeed\XSeries\Requests\Rules;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create rule
 */
class CreateRule extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/rules";
	}


	/**
	 * @param null|mixed $eventType
	 * @param null|mixed $remoteRuleId
	 */
	public function __construct(
		protected mixed $eventType = null,
		protected mixed $remoteRuleId = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['event_type' => $this->eventType, 'remote_rule_id' => $this->remoteRuleId]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
