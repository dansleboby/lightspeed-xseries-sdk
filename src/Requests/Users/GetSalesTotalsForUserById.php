<?php

namespace LightSpeed\XSeries\Requests\Users;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetSalesTotalsForUserByID
 *
 * Returns a single user's sales totals.
 */
class GetSalesTotalsForUserById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/users/{$this->userId}/sale_totals";
	}


	/**
	 * @param string $userId A valid user id
	 */
	public function __construct(
		protected string $userId,
	) {
	}
}
