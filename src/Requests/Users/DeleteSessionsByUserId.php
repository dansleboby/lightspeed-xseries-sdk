<?php

namespace LightSpeed\XSeries\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteSessionsByUserID
 *
 * Deletes all sessions and personal tokens of the given user.
 */
class DeleteSessionsByUserId extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/users/{$this->userId}/sessions";
	}


	/**
	 * @param string $userId A valid user id
	 */
	public function __construct(
		protected string $userId,
	) {
	}
}
