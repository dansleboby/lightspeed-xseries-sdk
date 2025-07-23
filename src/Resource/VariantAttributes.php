<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\VariantAttributes\ListVariantAttributes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class VariantAttributes extends BaseResource
{
	/**
	 * @param string $deleted (boolean) Indicates whether deleted items should be included in the response.
	 */
	public function listVariantAttributes(?string $deleted = null): Response
	{
		return $this->connector->send(new ListVariantAttributes($deleted));
	}
}
