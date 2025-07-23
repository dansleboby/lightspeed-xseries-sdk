<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ChannelRequestLog\GetSingleRequestLog;
use LightSpeed\XSeries\Requests\ChannelRequestLog\GetSingleRequestLogAsText;
use LightSpeed\XSeries\Requests\ChannelRequestLog\ListChannelRecords;
use LightSpeed\XSeries\Requests\ChannelRequestLog\ListRequestRecords;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class ChannelRequestLog extends Resource
{
	/**
	 * @param string $statusCode (string) Limit the requests to 1 or more status codes.
	 * @param string $requestMethod (string) Limit the requests to 1 or more request methods.
	 * @param string $occurredBefore (date-time) Limit requests to before this RFC3339 date.
	 * @param string $occurredAfter (date-time) Limit requests to after this RFC3339 date.
	 * @param string $statusCodeBefore (string) Limit requests to those with status codes less than this value.
	 * @param string $statusCodeAfter (string) Limit requests to those with status codes greater than this value.
	 * @param string $channelId (string) If provided, request logs will be limited to the supplied channel id. If no id is provided, only requests logged with no channel id will be returned. Requests with no channel id indicate requests made during the setup process.
	 */
	public function listRequestRecords(
		?string $statusCode,
		?string $requestMethod,
		?string $occurredBefore,
		?string $occurredAfter,
		?string $statusCodeBefore,
		?string $statusCodeAfter,
		?string $channelId,
	): Response
	{
		return $this->connector->send(new ListRequestRecords($statusCode, $requestMethod, $occurredBefore, $occurredAfter, $statusCodeBefore, $statusCodeAfter, $channelId));
	}


	/**
	 * @param string $requestLogId
	 */
	public function getSingleRequestLog(string $requestLogId): Response
	{
		return $this->connector->send(new GetSingleRequestLog($requestLogId));
	}


	/**
	 * @param string $requestLogIdTxt
	 */
	public function getSingleRequestLogAsText(string $requestLogIdTxt): Response
	{
		return $this->connector->send(new GetSingleRequestLogAsText($requestLogIdTxt));
	}


	public function listChannelRecords(): Response
	{
		return $this->connector->send(new ListChannelRecords());
	}
}
