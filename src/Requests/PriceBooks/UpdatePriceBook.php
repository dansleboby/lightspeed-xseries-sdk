<?php

namespace LightSpeed\XSeries\Requests\PriceBooks;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Update a price book
 */
class UpdatePriceBook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/price_books/{$this->priceBookId}";
	}


	/**
	 * @param string $priceBookId
	 * @param null|mixed $name
	 * @param null|mixed $customerGroupId
	 * @param null|mixed $id
	 * @param null|mixed $validFrom
	 * @param null|mixed $validTo
	 * @param null|mixed $restrictToPlatformKey
	 * @param null|mixed $outletId
	 * @param null|mixed $restrictToPlatformLabel
	 * @param null|mixed $customerGroup
	 * @param null|mixed $version
	 * @param null|mixed $deletedAt
	 * @param null|mixed $createdAt
	 * @param null|mixed $updatedAt
	 * @param null|mixed $outlet
	 */
	public function __construct(
		protected string $priceBookId,
		protected mixed $name = null,
		protected mixed $customerGroupId = null,
		protected mixed $id = null,
		protected mixed $validFrom = null,
		protected mixed $validTo = null,
		protected mixed $restrictToPlatformKey = null,
		protected mixed $outletId = null,
		protected mixed $restrictToPlatformLabel = null,
		protected mixed $customerGroup = null,
		protected mixed $version = null,
		protected mixed $deletedAt = null,
		protected mixed $createdAt = null,
		protected mixed $updatedAt = null,
		protected mixed $outlet = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'name' => $this->name,
			'customer_group_id' => $this->customerGroupId,
			'id' => $this->id,
			'valid_from' => $this->validFrom,
			'valid_to' => $this->validTo,
			'restrict_to_platform_key' => $this->restrictToPlatformKey,
			'outlet_id' => $this->outletId,
			'restrict_to_platform_label' => $this->restrictToPlatformLabel,
			'customer_group' => $this->customerGroup,
			'version' => $this->version,
			'deleted_at' => $this->deletedAt,
			'created_at' => $this->createdAt,
			'updated_at' => $this->updatedAt,
			'outlet' => $this->outlet,
		]);
	}
}
