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
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Promotions extends BaseResource
{
	/**
	 * @param mixed $customer
	 * @param mixed $sale
	 * @param mixed $promoCode
	 * @param mixed $channel
	 * @param mixed $outletId
	 * @param mixed $isTaxInclusive
	 * @param string $accept
	 */
	public function applyDiscountsToSaleObject(
		mixed $customer = null,
		mixed $sale = null,
		mixed $promoCode = null,
		mixed $channel = null,
		mixed $outletId = null,
		mixed $isTaxInclusive = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ApplyDiscountsToSaleObject($customer, $sale, $promoCode, $channel, $outletId, $isTaxInclusive, $accept));
	}


	/**
	 * @param string $scope (string) Scope of the search
	 * @param string $name (string) Part of promotion's name being searched
	 * @param string $startDate (string) Only show promotions that have a start date after or equal to this
	 * @param string $endDate (string) Only show promotions that have an end date before or equal to this
	 * @param string $outletId (array of strings) Only show promotions linked to one or many of the outlets specified here
	 * @param string $orderBy (string) Sort the result by this field
	 * @param string $direction (string) Sort direction
	 * @param string $offset (integer) Offset
	 * @param string $pageSize (integer) Number of results per page
	 * @param string $accept
	 */
	public function searchPromotions(
		?string $scope = null,
		?string $name = null,
		?string $startDate = null,
		?string $endDate = null,
		?string $outletId = null,
		?string $orderBy = null,
		?string $direction = null,
		?string $offset = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new SearchPromotions($scope, $name, $startDate, $endDate, $outletId, $orderBy, $direction, $offset, $pageSize, $accept));
	}


	/**
	 * @param string $endTimeTo Upper limit for the promotion end date as UTC timestamp. Format: 2020-08-08T12:00:00Z.
	 * @param string $endTimeFrom Lower limit for the promotion end date as UTC timestamp. Format: 2020-08-08T12:00:00Z.
	 * @param string $pageSize The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listPromotions(
		?string $endTimeTo = null,
		?string $endTimeFrom = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListPromotions($endTimeTo, $endTimeFrom, $pageSize, $accept));
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
	 * @param string $accept
	 */
	public function createPromotion(
		mixed $id = null,
		mixed $name = null,
		mixed $description = null,
		mixed $startTime = null,
		mixed $endTime = null,
		mixed $condition = null,
		mixed $action = null,
		mixed $loyaltyMultiplier = null,
		mixed $outletIds = null,
		mixed $channels = null,
		mixed $customerGroupIds = null,
		mixed $status = null,
		mixed $usePromoCode = null,
		mixed $addPromoCode = null,
		mixed $promoCodeSummary = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreatePromotion($id, $name, $description, $startTime, $endTime, $condition, $action, $loyaltyMultiplier, $outletIds, $channels, $customerGroupIds, $status, $usePromoCode, $addPromoCode, $promoCodeSummary, $accept));
	}


	/**
	 * @param string $promotionId
	 * @param string $accept
	 */
	public function getSinglePromotion(string $promotionId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSinglePromotion($promotionId, $accept));
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
	 * @param string $accept
	 */
	public function updatePromotion(
		string $promotionId,
		mixed $id = null,
		mixed $name = null,
		mixed $description = null,
		mixed $startTime = null,
		mixed $endTime = null,
		mixed $condition = null,
		mixed $action = null,
		mixed $loyaltyMultiplier = null,
		mixed $outletIds = null,
		mixed $channels = null,
		mixed $customerGroupIds = null,
		mixed $status = null,
		mixed $usePromoCode = null,
		mixed $addPromoCode = null,
		mixed $promoCodeSummary = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new UpdatePromotion($promotionId, $id, $name, $description, $startTime, $endTime, $condition, $action, $loyaltyMultiplier, $outletIds, $channels, $customerGroupIds, $status, $usePromoCode, $addPromoCode, $promoCodeSummary, $accept));
	}


	/**
	 * @param string $promotionId
	 * @param string $accept
	 */
	public function getProductsForPromotion(string $promotionId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetProductsForPromotion($promotionId, $accept));
	}


	/**
	 * @param string $promotionId
	 * @param string $accept
	 */
	public function getPromoCodesForPromotion(string $promotionId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetPromoCodesForPromotion($promotionId, $accept));
	}
}
