<?php

namespace LightSpeed\XSeries\Requests\RemoteRules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a remote rule
 */
class DeleteRemoteRule extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/remote_rules/{$this->remoteRuleId}";
	}


	/**
	 * @param string $remoteRuleId
	 */
	public function __construct(
		protected string $remoteRuleId,
	) {
	}
}
