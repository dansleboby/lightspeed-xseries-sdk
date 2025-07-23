<?php

namespace LightSpeed\XSeries\Requests\Rules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a business rule
 */
class DeleteBusinessRule extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/rules/{$this->ruleId}";
	}


	/**
	 * @param string $ruleId
	 */
	public function __construct(
		protected string $ruleId,
	) {
	}
}
