<?php

namespace LightSpeed\XSeries\Requests\CustomFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List custom field values
 */
class ListCustomFieldValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/custom_fields/values";
	}


	/**
	 * @param null|string $entity (Required) (string) The entity type.
	 * @param null|string $entityId (Required) (string) The entity ID.
	 */
	public function __construct(
		protected ?string $entity = null,
		protected ?string $entityId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['entity' => $this->entity, 'entity_id' => $this->entityId]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
