<?php

namespace LightSpeed\XSeries\Requests\CustomFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a custom field
 */
class DeleteCustomField extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/custom_fields/{$this->customFieldId}";
	}


	/**
	 * @param string $customFieldId
	 */
	public function __construct(
		protected string $customFieldId,
	) {
	}
}
