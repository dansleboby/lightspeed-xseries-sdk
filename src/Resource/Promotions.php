<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Promotions\ApplyDiscountsToSaleObject;
use LightSpeed\XSeries\Requests\Promotions\CreatePromotion;
use LightSpeed\XSeries\Requests\Promotions\GetProductsForPromotion;
use LightSpeed\XSeries\Requests\Promotions\GetPromoCodesForPromotion;
use LightSpeed\XSeries\Requests\Promotions\GetSinglePromotion;
use LightSpeed\XSeries\Requests\Promotions\ListPromotions;
use LightSpeed\XSeries\Requests\Promotions\SearchPromotions;
use LightSpeed\XSeries\Requests\Promotions\UpdatePromotion;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Promotions extends Resource
{
	/**
	 * @param mixed $customer
	 * @param mixed $sale
	 * @param mixed $promoCode
	 * @param mixed $channel
	 * @param mixed $outletId
	 * @param mixed $isTaxInclusive
	 */
	public function applyDiscountsToSaleObject(
		mixed $customer,
		mixed $sale,
		mixed $promoCode,
		mixed $channel,
		mixed $outletId,
		mixed $isTaxInclusive,
	): Response
	{
		return $this->connector->send(new ApplyDiscountsToSaleObject($customer, $sale, $promoCode, $channel, $outletId, $isTaxInclusive));
	}


	/**
	 * @param string $scope (string) Scope of the search
	 * @param string $name (string) Part of promotion's name being searched
	 * @param string $startDate (string) Only show promotions that have a start date after or equal to this
	 * @param string $endDate (string) Only show promotions that have an end date before or equal to this
	 * @param string $outletId (array of strings) Only show promotions linked to one or many of the outlets specified here
	 * @param string $direction (string) Sort direction
	 * @param string $offset (integer) Offset
	 * @param string $pageSize (integer) Number of results per page
	 */
	public function searchPromotions(
		?string $scope,
		?string $name,
		?string $startDate,
		?string $endDate,
		?string $outletId,
		?string $direction,
		?string $offset,
		?string $pageSize,
	): Response
	{
		return $this->connector->send(new SearchPromotions($scope, $name, $startDate, $endDate, $outletId, $direction, $offset, $pageSize));
	}


	/**
	 * @param string $endTimeTo Upper limit for the promotion end date as UTC timestamp. Format: 2020-08-08T12:00:00Z.
	 * @param string $endTimeFrom Lower limit for the promotion end date as UTC timestamp. Format: 2020-08-08T12:00:00Z.
	 * @param string $pageSize The maximum number of items to be returned in the response.
	 */
	public function listPromotions(?string $endTimeTo, ?string $endTimeFrom, ?string $pageSize): Response
	{
		return $this->connector->send(new ListPromotions($endTimeTo, $endTimeFrom, $pageSize));
	}


	/**
	 * @param mixed $id
	 * @param mixed $name
	 * @param mixed $description
	 * @param mixed $startTime
	 * @param mixed $endTime
	 * @param mixed $condition
	 * @param mixed $action
	 * @param mixed $loyaltyMultiplier
	 * @param mixed $outletIds
	 * @param mixed $channels
	 * @param mixed $customerGroupIds
	 * @param mixed $status
	 * @param mixed $usePromoCode
	 * @param mixed $addPromoCode
	 * @param mixed $promoCodeSummary
	 */
	public function createPromotion(
		mixed $id,
		mixed $name,
		mixed $description,
		mixed $startTime,
		mixed $endTime,
		mixed $condition,
		mixed $action,
		mixed $loyaltyMultiplier,
		mixed $outletIds,
		mixed $channels,
		mixed $customerGroupIds,
		mixed $status,
		mixed $usePromoCode,
		mixed $addPromoCode,
		mixed $promoCodeSummary,
	): Response
	{
		return $this->connector->send(new CreatePromotion($id, $name, $description, $startTime, $endTime, $condition, $action, $loyaltyMultiplier, $outletIds, $channels, $customerGroupIds, $status, $usePromoCode, $addPromoCode, $promoCodeSummary));
	}


	/**
	 * @param string $promotionId
	 */
	public function getSinglePromotion(string $promotionId): Response
	{
		return $this->connector->send(new GetSinglePromotion($promotionId));
	}


	/**
	 * @param string $promotionId
	 * @param mixed $id
	 * @param mixed $name
	 * @param mixed $description
	 * @param mixed $startTime
	 * @param mixed $endTime
	 * @param mixed $condition
	 * @param mixed $action
	 * @param mixed $loyaltyMultiplier
	 * @param mixed $outletIds
	 * @param mixed $channels
	 * @param mixed $customerGroupIds
	 * @param mixed $status
	 * @param mixed $usePromoCode
	 * @param mixed $addPromoCode
	 * @param mixed $promoCodeSummary
	 */
	public function updatePromotion(
		string $promotionId,
		mixed $id,
		mixed $name,
		mixed $description,
		mixed $startTime,
		mixed $endTime,
		mixed $condition,
		mixed $action,
		mixed $loyaltyMultiplier,
		mixed $outletIds,
		mixed $channels,
		mixed $customerGroupIds,
		mixed $status,
		mixed $usePromoCode,
		mixed $addPromoCode,
		mixed $promoCodeSummary,
	): Response
	{
		return $this->connector->send(new UpdatePromotion($promotionId, $id, $name, $description, $startTime, $endTime, $condition, $action, $loyaltyMultiplier, $outletIds, $channels, $customerGroupIds, $status, $usePromoCode, $addPromoCode, $promoCodeSummary));
	}


	/**
	 * @param string $promotionId
	 */
	public function getProductsForPromotion(string $promotionId): Response
	{
		return $this->connector->send(new GetProductsForPromotion($promotionId));
	}


	/**
	 * @param string $promotionId
	 */
	public function getPromoCodesForPromotion(string $promotionId): Response
	{
		return $this->connector->send(new GetPromoCodesForPromotion($promotionId));
	}
}
