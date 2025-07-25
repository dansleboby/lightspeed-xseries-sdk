<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\ChannelRequestLog\GetSingleRequest;
use LightSpeed\XSeries\Requests\ChannelRequestLog\GetSingleRequestText;
use LightSpeed\XSeries\Requests\ChannelRequestLog\ListChannels;
use LightSpeed\XSeries\Requests\ChannelRequestLog\ListRequests;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ChannelRequestLog extends BaseResource
{
	/**
	 * @param string $statusCode Limit the requests to 1 or more status codes.
	 * @param string $requestMethod Limit the requests to 1 or more request methods.
	 * @param string $occurredBefore Limit requests to before this RFC3339 date.
	 * @param string $occurredAfter Limit requests to after this RFC3339 date.
	 * @param string $statusCodeBefore Limit requests to those with status codes less than this value.
	 * @param string $statusCodeAfter Limit requests to those with status codes greater than this value.
	 * @param string $channelId If provided, request logs will be limited to the supplied channel id. If no id is provided, only requests logged with no channel id will be returned. Requests with no channel id indicate requests made during the setup process.
	 */
	public function listRequests(
		?string $statusCode = null,
		?string $requestMethod = null,
		?string $occurredBefore = null,
		?string $occurredAfter = null,
		?string $statusCodeBefore = null,
		?string $statusCodeAfter = null,
		?string $channelId = null,
	): Response
	{
		return $this->connector->send(new ListRequests($statusCode, $requestMethod, $occurredBefore, $occurredAfter, $statusCodeBefore, $statusCodeAfter, $channelId));
	}


	/**
	 * @param string $requestLogId The request log id
	 */
	public function getSingleRequest(string $requestLogId): Response
	{
		return $this->connector->send(new GetSingleRequest($requestLogId));
	}


	/**
	 * @param string $requestLogId The request log id
	 */
	public function getSingleRequestText(string $requestLogId): Response
	{
		return $this->connector->send(new GetSingleRequestText($requestLogId));
	}


	public function listChannels(): Response
	{
		return $this->connector->send(new ListChannels());
	}
}
