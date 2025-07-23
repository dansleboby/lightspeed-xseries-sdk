<?php

namespace LightSpeed\XSeries\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteUserByID
 *
 * Returns the user that has been deleted.
 */
class DeleteUserById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/users/{$this->userId}";
	}


	/**
	 * @param string $userId A valid user id that is not the current user nor a primary admin
	 */
	public function __construct(
		protected string $userId,
	) {
	}
}
