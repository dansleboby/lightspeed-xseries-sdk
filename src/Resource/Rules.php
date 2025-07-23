<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Rules\CreateRule;
use LightSpeed\XSeries\Requests\Rules\DeleteBusinessRule;
use LightSpeed\XSeries\Requests\Rules\ListRules;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Rules extends Resource
{
	public function listRules(): Response
	{
		return $this->connector->send(new ListRules());
	}


	/**
	 * @param mixed $eventType
	 * @param mixed $remoteRuleId
	 */
	public function createRule(mixed $eventType, mixed $remoteRuleId): Response
	{
		return $this->connector->send(new CreateRule($eventType, $remoteRuleId));
	}


	/**
	 * @param string $ruleId
	 */
	public function deleteBusinessRule(string $ruleId): Response
	{
		return $this->connector->send(new DeleteBusinessRule($ruleId));
	}
}
