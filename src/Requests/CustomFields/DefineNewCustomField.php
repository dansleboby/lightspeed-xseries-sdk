<?php

namespace LightSpeed\XSeries\Requests\CustomFields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Define a new custom field
 */
class DefineNewCustomField extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/workflows/custom_fields";
	}


	/**
	 * @param null|mixed $entity
	 * @param null|mixed $name
	 * @param null|mixed $title
	 * @param null|mixed $type
	 * @param null|mixed $visibleInUi
	 * @param null|mixed $editableInUi
	 * @param null|mixed $printOnReceipt
	 */
	public function __construct(
		protected mixed $entity = null,
		protected mixed $name = null,
		protected mixed $title = null,
		protected mixed $type = null,
		protected mixed $visibleInUi = null,
		protected mixed $editableInUi = null,
		protected mixed $printOnReceipt = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'entity' => $this->entity,
			'name' => $this->name,
			'title' => $this->title,
			'type' => $this->type,
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
