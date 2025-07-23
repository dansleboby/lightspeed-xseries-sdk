<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Promotions\ApplyDiscount;
use LightSpeed\XSeries\Requests\Promotions\CreatePromotion;
use LightSpeed\XSeries\Requests\Promotions\GetPromotionById;
use LightSpeed\XSeries\Requests\Promotions\GetPromotionProducts;
use LightSpeed\XSeries\Requests\Promotions\GetPromotionPromoCodes;
use LightSpeed\XSeries\Requests\Promotions\ListPromotions;
use LightSpeed\XSeries\Requests\Promotions\SearchPromotions;
use LightSpeed\XSeries\Requests\Promotions\UpdatePromotion;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Promotions extends BaseResource
{
	public function applyDiscount(): Response
	{
		return $this->connector->send(new ApplyDiscount());
	}


	/**
	 * @param string $scope Scope of the search
	 * @param string $name Part of promotion's name being searched
	 * @param string $startTime Only show promotions that have a start time after or equal to this
	 * @param string $endTime Only show promotions that have an end time before or equal to this
	 * @param array $outletId Only show promotions linked to one or many of the outlets specified here
	 * @param string $orderBy Sort the result by this field
	 * @param string $direction Sort direction
	 * @param int $offset Offset
	 * @param int $pageSize Number of results per page
	 */
	public function searchPromotions(
		?string $scope = null,
		?string $name = null,
		?string $startTime = null,
		?string $endTime = null,
		?array $outletId = null,
		?string $orderBy = null,
		?string $direction = null,
		?int $offset = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new SearchPromotions($scope, $name, $startTime, $endTime, $outletId, $orderBy, $direction, $offset, $pageSize));
	}


	/**
	 * @param string $endTimeTo Upper limit for the promotion end date as UTC timestamp. Format: `2020-08-08T12:00:00Z`.
	 * @param string $endTimeFrom Lower limit for the promotion end date as UTC timestamp. Format: `2020-08-08T12:00:00Z`.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listPromotions(
		?string $endTimeTo = null,
		?string $endTimeFrom = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new ListPromotions($endTimeTo, $endTimeFrom, $pageSize));
	}


	public function createPromotion(): Response
	{
		return $this->connector->send(new CreatePromotion());
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function getPromotionById(string $promotionId): Response
	{
		return $this->connector->send(new GetPromotionById($promotionId));
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function updatePromotion(string $promotionId): Response
	{
		return $this->connector->send(new UpdatePromotion($promotionId));
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function getPromotionProducts(string $promotionId): Response
	{
		return $this->connector->send(new GetPromotionProducts($promotionId));
	}


	/**
	 * @param string $promotionId The promotion id
	 */
	public function getPromotionPromoCodes(string $promotionId): Response
	{
		return $this->connector->send(new GetPromotionPromoCodes($promotionId));
	}
}
