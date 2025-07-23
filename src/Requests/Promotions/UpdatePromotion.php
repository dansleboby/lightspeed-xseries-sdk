<?php

namespace LightSpeed\XSeries\Requests\Promotions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a promotion
 */
class UpdatePromotion extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/promotions/{$this->promotionId}";
	}


	/**
	 * @param string $promotionId
	 * @param null|mixed $id
	 * @param null|mixed $name
	 * @param null|mixed $description
	 * @param null|mixed $startTime
	 * @param null|mixed $endTime
	 * @param null|mixed $condition
	 * @param null|mixed $action
	 * @param null|mixed $loyaltyMultiplier
	 * @param null|mixed $outletIds
	 * @param null|mixed $channels
	 * @param null|mixed $customerGroupIds
	 * @param null|mixed $status
	 * @param null|mixed $usePromoCode
	 * @param null|mixed $addPromoCode
	 * @param null|mixed $promoCodeSummary
	 */
	public function __construct(
		protected string $promotionId,
		protected mixed $id = null,
		protected mixed $name = null,
		protected mixed $description = null,
		protected mixed $startTime = null,
		protected mixed $endTime = null,
		protected mixed $condition = null,
		protected mixed $action = null,
		protected mixed $loyaltyMultiplier = null,
		protected mixed $outletIds = null,
		protected mixed $channels = null,
		protected mixed $customerGroupIds = null,
		protected mixed $status = null,
		protected mixed $usePromoCode = null,
		protected mixed $addPromoCode = null,
		protected mixed $promoCodeSummary = null,
	) {
	}


	public function defaultBody(): array
	{
		return array_filter([
			'id' => $this->id,
			'name' => $this->name,
			'description' => $this->description,
			'start_time' => $this->startTime,
			'end_time' => $this->endTime,
			'condition' => $this->condition,
			'action' => $this->action,
			'loyalty_multiplier' => $this->loyaltyMultiplier,
			'outlet_ids' => $this->outletIds,
			'channels' => $this->channels,
			'customer_group_ids' => $this->customerGroupIds,
			'status' => $this->status,
			'use_promo_code' => $this->usePromoCode,
			'add_promo_code' => $this->addPromoCode,
			'promo_code_summary' => $this->promoCodeSummary,
		]);
	}
}
