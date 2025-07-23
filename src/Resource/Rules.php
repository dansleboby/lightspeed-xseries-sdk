<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Rules\CreateRule;
use LightSpeed\XSeries\Requests\Rules\DeleteBusinessRule;
use LightSpeed\XSeries\Requests\Rules\ListRules;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Rules extends BaseResource
{
	/**
	 * @param string $accept
	 */
	public function listRules(?string $accept = null): Response
	{
		return $this->connector->send(new ListRules($accept));
	}


	/**
	 * @param mixed $eventType
	 * @param mixed $remoteRuleId
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createRule(
		mixed $eventType = null,
		mixed $remoteRuleId = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateRule($eventType, $remoteRuleId, $contentType, $accept));
	}


	/**
	 * @param string $ruleId
	 */
	public function deleteBusinessRule(string $ruleId): Response
	{
		return $this->connector->send(new DeleteBusinessRule($ruleId));
	}
}
