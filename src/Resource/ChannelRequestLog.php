<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ChannelRequestLog\GetSingleRequestLog;
use LightSpeed\XSeries\Requests\ChannelRequestLog\GetSingleRequestLogAsText;
use LightSpeed\XSeries\Requests\ChannelRequestLog\ListChannelRecords;
use LightSpeed\XSeries\Requests\ChannelRequestLog\ListRequestRecords;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ChannelRequestLog extends BaseResource
{
	/**
	 * @param string $statusCode (string) Limit the requests to 1 or more status codes.
	 * @param string $requestMethod (string) Limit the requests to 1 or more request methods.
	 * @param string $occurredBefore (date-time) Limit requests to before this RFC3339 date.
	 * @param string $occurredAfter (date-time) Limit requests to after this RFC3339 date.
	 * @param string $statusCodeBefore (string) Limit requests to those with status codes less than this value.
	 * @param string $statusCodeAfter (string) Limit requests to those with status codes greater than this value.
	 * @param string $channelId (string) If provided, request logs will be limited to the supplied channel id. If no id is provided, only requests logged with no channel id will be returned. Requests with no channel id indicate requests made during the setup process.
	 * @param string $accept
	 */
	public function listRequestRecords(
		?string $statusCode = null,
		?string $requestMethod = null,
		?string $occurredBefore = null,
		?string $occurredAfter = null,
		?string $statusCodeBefore = null,
		?string $statusCodeAfter = null,
		?string $channelId = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListRequestRecords($statusCode, $requestMethod, $occurredBefore, $occurredAfter, $statusCodeBefore, $statusCodeAfter, $channelId, $accept));
	}


	/**
	 * @param string $requestLogId
	 * @param string $accept
	 */
	public function getSingleRequestLog(string $requestLogId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleRequestLog($requestLogId, $accept));
	}


	/**
	 * @param string $requestLogIdTxt
	 * @param string $accept
	 */
	public function getSingleRequestLogAsText(string $requestLogIdTxt, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleRequestLogAsText($requestLogIdTxt, $accept));
	}


	/**
	 * @param string $accept
	 */
	public function listChannelRecords(?string $accept = null): Response
	{
		return $this->connector->send(new ListChannelRecords($accept));
	}
}
