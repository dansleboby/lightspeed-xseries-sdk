<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PromoCodes\DeletePromoCodes;
use LightSpeed\XSeries\Requests\PromoCodes\GetTheActiveStatusOfPromoCodes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PromoCodes extends BaseResource
{
	/**
	 * @param array $values
	 * @param string $accept
	 */
	public function getTheActiveStatusOfPromoCodes(?array $values = null, ?string $accept = null): Response
	{
		return $this->connector->send(new GetTheActiveStatusOfPromoCodes($values, $accept));
	}


	/**
	 * @param array $values
	 * @param string $accept
	 */
	public function deletePromoCodes(?array $values = null, ?string $accept = null): Response
	{
		return $this->connector->send(new DeletePromoCodes($values, $accept));
	}
}
