<?php

namespace LightSpeed\XSeries\Requests\Users;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * GetUsersById
 *
 * Get multiple users by id.
 */
class GetUsersById extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/users/bulk";
	}


	public function __construct()
	{
	}
}
