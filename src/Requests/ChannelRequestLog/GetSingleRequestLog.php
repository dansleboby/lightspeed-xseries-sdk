<?php

namespace LightSpeed\XSeries\Requests\ChannelRequestLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single request log
 */
class GetSingleRequestLog extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/channel_requests/{$this->requestLogId}";
	}


	/**
	 * @param string $requestLogId
	 */
	public function __construct(
		protected string $requestLogId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
