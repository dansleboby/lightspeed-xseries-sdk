<?php

namespace LightSpeed\XSeries\Requests\CustomFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List custom field definitions
 */
class ListCustomFieldDefinitions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/custom_fields";
	}


	/**
	 * @param null|string $entity (Required) (string) The entity type.
	 */
	public function __construct(
		protected ?string $entity = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['entity' => $this->entity]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
