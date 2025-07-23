<?php

namespace LightSpeed\XSeries\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single user
 */
class GetSingleUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/users/{$this->userId}";
	}


	/**
	 * @param string $userId
	 */
	public function __construct(
		protected string $userId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
