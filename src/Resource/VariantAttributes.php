<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\VariantAttributes\CreateVariantAttribute;
use LightSpeed\XSeries\Requests\VariantAttributes\DeleteVariantAttribute;
use LightSpeed\XSeries\Requests\VariantAttributes\GetVariantAttributes;
use LightSpeed\XSeries\Requests\VariantAttributes\ListVariantAttributes;
use LightSpeed\XSeries\Requests\VariantAttributes\UpdateVariantAttribute;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class VariantAttributes extends BaseResource
{
	/**
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function listVariantAttributes(?bool $deleted = null): Response
	{
		return $this->connector->send(new ListVariantAttributes($deleted));
	}


	public function createVariantAttribute(): Response
	{
		return $this->connector->send(new CreateVariantAttribute());
	}


	/**
	 * @param string $attributeId The object identifier of the Variant Attribute to retrieve.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 */
	public function getVariantAttributes(string $attributeId, ?bool $deleted = null): Response
	{
		return $this->connector->send(new GetVariantAttributes($attributeId, $deleted));
	}


	/**
	 * @param string $attributeId The object identifier of the Variant Attribute to update.
	 */
	public function updateVariantAttribute(string $attributeId): Response
	{
		return $this->connector->send(new UpdateVariantAttribute($attributeId));
	}


	/**
	 * @param string $attributeId The object identifier of the Variant Attribute to delete.
	 */
	public function deleteVariantAttribute(string $attributeId): Response
	{
		return $this->connector->send(new DeleteVariantAttribute($attributeId));
	}
}
