<?php

namespace LightSpeed\XSeries\Requests\CustomFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a custom field
 */
class UpdateCustomField extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/custom_fields/{$this->customFieldId}";
	}


	/**
	 * @param string $customFieldId
	 * @param null|mixed $title
	 * @param null|mixed $visibleInUi
	 * @param null|mixed $editableInUi
	 * @param null|mixed $printOnReceipt
	 */
	public function __construct(
		protected string $customFieldId,
		protected mixed $title = null,
		protected mixed $visibleInUi = null,
		protected mixed $editableInUi = null,
		protected mixed $printOnReceipt = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'title' => $this->title,
			'visible_in_ui' => $this->visibleInUi,
			'editable_in_ui' => $this->editableInUi,
			'print_on_receipt' => $this->printOnReceipt,
		]);
	}


	public function defaultHeaders(): array
	{
		return array_filter([]);
	}
}
