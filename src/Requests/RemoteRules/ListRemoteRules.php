<?php

namespace LightSpeed\XSeries\Requests\RemoteRules;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List remote rules
 */
class ListRemoteRules extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/remote_rules";
	}


	public function __construct()
	{
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
