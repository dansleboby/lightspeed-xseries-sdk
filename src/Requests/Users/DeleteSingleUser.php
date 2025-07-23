<?php

namespace LightSpeed\XSeries\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a Single User
 */
class DeleteSingleUser extends Request
{
	protected Method $method = Method::DELETE;


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
}
