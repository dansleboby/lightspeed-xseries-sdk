<?php

namespace LightSpeed\XSeries\Requests\Suppliers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create or update a supplier
 */
class CreateOrUpdateSupplier extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/supplier";
	}


	/**
	 * @param null|mixed $id
	 * @param null|mixed $name
	 * @param null|mixed $description
	 * @param null|mixed $contact
	 */
	public function __construct(
		protected mixed $id = null,
		protected mixed $name = null,
		protected mixed $description = null,
		protected mixed $contact = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter(['id' => $this->id, 'name' => $this->name, 'description' => $this->description, 'contact' => $this->contact]);
	}
}
