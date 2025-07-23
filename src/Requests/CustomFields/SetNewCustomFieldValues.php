<?php

namespace LightSpeed\XSeries\Requests\CustomFields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Set new custom field values
 */
class SetNewCustomFieldValues extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/custom_fields/values";
	}


	/**
	 * @param null|mixed $entity
	 * @param null|mixed $entityId
	 * @param null|mixed $values
	 */
	public function __construct(
		protected mixed $entity = null,
		protected mixed $entityId = null,
		protected mixed $values = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['entity' => $this->entity, 'entity_id' => $this->entityId, 'values' => $this->values]);
	}
}
