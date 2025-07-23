<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\RemoteRules\CreateRemoteRule;
use LightSpeed\XSeries\Requests\RemoteRules\DeleteRemoteRule;
use LightSpeed\XSeries\Requests\RemoteRules\ListRemoteRules;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class RemoteRules extends Resource
{
	public function listRemoteRules(): Response
	{
		return $this->connector->send(new ListRemoteRules());
	}


	/**
	 * @param mixed $url
	 */
	public function createRemoteRule(mixed $url): Response
	{
		return $this->connector->send(new CreateRemoteRule($url));
	}


	/**
	 * @param string $remoteRuleId
	 */
	public function deleteRemoteRule(string $remoteRuleId): Response
	{
		return $this->connector->send(new DeleteRemoteRule($remoteRuleId));
	}
}
