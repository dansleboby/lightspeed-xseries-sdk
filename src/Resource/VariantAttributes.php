<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\VariantAttributes\ListVariantAttributes;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class VariantAttributes extends Resource
{
	/**
	 * @param string $deleted (boolean) Indicates whether deleted items should be included in the response.
	 */
	public function listVariantAttributes(?string $deleted): Response
	{
		return $this->connector->send(new ListVariantAttributes($deleted));
	}
}
