<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\RemoteRules\CreateRemoteRule;
use LightSpeed\XSeries\Requests\RemoteRules\DeleteRemoteRule;
use LightSpeed\XSeries\Requests\RemoteRules\ListRemoteRules;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class RemoteRules extends BaseResource
{
	/**
	 * @param string $accept
	 */
	public function listRemoteRules(?string $accept = null): Response
	{
		return $this->connector->send(new ListRemoteRules($accept));
	}


	/**
	 * @param mixed $url
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createRemoteRule(mixed $url = null, ?string $contentType = null, ?string $accept = null): Response
	{
		return $this->connector->send(new CreateRemoteRule($url, $contentType, $accept));
	}


	/**
	 * @param string $remoteRuleId
	 */
	public function deleteRemoteRule(string $remoteRuleId): Response
	{
		return $this->connector->send(new DeleteRemoteRule($remoteRuleId));
	}
}
