<?php

namespace LightSpeed\XSeries\Requests\ChannelRequestLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single request log as text
 */
class GetSingleRequestLogAsText extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/channel_requests/{$this->requestLogIdTxt}";
	}


	/**
	 * @param string $requestLogIdTxt
	 */
	public function __construct(
		protected string $requestLogIdTxt,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
