<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PromoCodes\DeletePromoCodes;
use LightSpeed\XSeries\Requests\PromoCodes\GetTheActiveStatusOfPromoCodes;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class PromoCodes extends Resource
{
	/**
	 * @param array $values
	 */
	public function getTheActiveStatusOfPromoCodes(?array $values): Response
	{
		return $this->connector->send(new GetTheActiveStatusOfPromoCodes($values));
	}


	/**
	 * @param array $values
	 */
	public function deletePromoCodes(?array $values): Response
	{
		return $this->connector->send(new DeletePromoCodes($values));
	}
}
