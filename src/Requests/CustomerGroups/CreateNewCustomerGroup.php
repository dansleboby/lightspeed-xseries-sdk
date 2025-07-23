<?php

namespace LightSpeed\XSeries\Requests\CustomerGroups;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a new customer group
 */
class CreateNewCustomerGroup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/customer_groups";
	}


	/**
	 * @param null|mixed $name
	 * @param null|mixed $id
	 * @param null|mixed $groupId
	 * @param null|mixed $createdAt
	 * @param null|mixed $updatedAt
	 * @param null|mixed $deletedAt
	 * @param null|mixed $version
	 */
	public function __construct(
		protected mixed $name = null,
		protected mixed $id = null,
		protected mixed $groupId = null,
		protected mixed $createdAt = null,
		protected mixed $updatedAt = null,
		protected mixed $deletedAt = null,
		protected mixed $version = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'name' => $this->name,
			'id' => $this->id,
			'group_id' => $this->groupId,
			'created_at' => $this->createdAt,
			'updated_at' => $this->updatedAt,
			'deleted_at' => $this->deletedAt,
			'version' => $this->version,
		]);
	}
}
