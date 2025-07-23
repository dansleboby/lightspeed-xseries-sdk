<?php

namespace LightSpeed\XSeries\Requests\ChannelRequestLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List channel records
 */
class ListChannelRecords extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/channels";
	}


	public function __construct()
	{
	}
}
