<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\GiftCards\CreateGiftCard;
use LightSpeed\XSeries\Requests\GiftCards\CreateGiftCardTransaction;
use LightSpeed\XSeries\Requests\GiftCards\FindGiftCardByTransactionId;
use LightSpeed\XSeries\Requests\GiftCards\GetSingleGiftCard;
use LightSpeed\XSeries\Requests\GiftCards\ListGiftCards;
use LightSpeed\XSeries\Requests\GiftCards\ReverseGiftCardTransaction;
use LightSpeed\XSeries\Requests\GiftCards\VoidGiftCard;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GiftCards extends BaseResource
{
	/**
	 * @param string $before (string) The upper limit for the ID to be included in the response.
	 * @param string $pageSize (Int) The maximum number of items to be returned in the response. NOTE: 200 is the maximum value of the page_size parameter.
	 * @param string $cardNumber (string) Find by gift card number.
	 * @param string $status (string) Filter by gift card status.
	 * @param string $accept
	 */
	public function listGiftCards(
		?string $before = null,
		?string $pageSize = null,
		?string $cardNumber = null,
		?string $status = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListGiftCards($before, $pageSize, $cardNumber, $status, $accept));
	}


	/**
	 * @param mixed $amount
	 * @param mixed $number
	 * @param mixed $userId
	 * @param mixed $expiresAt
	 * @param mixed $timeZone
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createGiftCard(
		mixed $amount = null,
		mixed $number = null,
		mixed $userId = null,
		mixed $expiresAt = null,
		mixed $timeZone = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateGiftCard($amount, $number, $userId, $expiresAt, $timeZone, $contentType, $accept));
	}


	/**
	 * @param string $number
	 * @param string $accept
	 */
	public function getSingleGiftCard(string $number, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleGiftCard($number, $accept));
	}


	/**
	 * @param string $number
	 * @param string $accept
	 */
	public function voidGiftCard(string $number, ?string $accept = null): Response
	{
		return $this->connector->send(new VoidGiftCard($number, $accept));
	}


	/**
	 * @param string $number
	 * @param mixed $amount
	 * @param mixed $clientId
	 * @param mixed $type
	 * @param mixed $userId
	 * @param mixed $expiresAt
	 * @param mixed $timeZone
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createGiftCardTransaction(
		string $number,
		mixed $amount = null,
		mixed $clientId = null,
		mixed $type = null,
		mixed $userId = null,
		mixed $expiresAt = null,
		mixed $timeZone = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateGiftCardTransaction($number, $amount, $clientId, $type, $userId, $expiresAt, $timeZone, $contentType, $accept));
	}


	/**
	 * @param string $transactionId
	 * @param string $accept
	 */
	public function findGiftCardByTransactionId(string $transactionId, ?string $accept = null): Response
	{
		return $this->connector->send(new FindGiftCardByTransactionId($transactionId, $accept));
	}


	/**
	 * @param string $transactionId
	 * @param string $accept
	 */
	public function reverseGiftCardTransaction(string $transactionId, ?string $accept = null): Response
	{
		return $this->connector->send(new ReverseGiftCardTransaction($transactionId, $accept));
	}
}
