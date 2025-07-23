<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\GiftCards\CreateGiftCard;
use LightSpeed\XSeries\Requests\GiftCards\CreateGiftCardTransaction;
use LightSpeed\XSeries\Requests\GiftCards\FindGiftCardByTransactionId;
use LightSpeed\XSeries\Requests\GiftCards\GetSingleGiftCard;
use LightSpeed\XSeries\Requests\GiftCards\ListGiftCards;
use LightSpeed\XSeries\Requests\GiftCards\ReverseGiftCardTransaction;
use LightSpeed\XSeries\Requests\GiftCards\VoidGiftCard;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class GiftCards extends Resource
{
	/**
	 * @param string $before (string) The upper limit for the ID to be included in the response.
	 * @param string $pageSize (Int) The maximum number of items to be returned in the response. NOTE: 200 is the maximum value of the page_size parameter.
	 * @param string $cardNumber (string) Find by gift card number.
	 * @param string $status (string) Filter by gift card status.
	 */
	public function listGiftCards(?string $before, ?string $pageSize, ?string $cardNumber, ?string $status): Response
	{
		return $this->connector->send(new ListGiftCards($before, $pageSize, $cardNumber, $status));
	}


	/**
	 * @param mixed $amount
	 * @param mixed $number
	 * @param mixed $userId
	 * @param mixed $expiresAt
	 * @param mixed $timeZone
	 */
	public function createGiftCard(
		mixed $amount,
		mixed $number,
		mixed $userId,
		mixed $expiresAt,
		mixed $timeZone,
	): Response
	{
		return $this->connector->send(new CreateGiftCard($amount, $number, $userId, $expiresAt, $timeZone));
	}


	/**
	 * @param string $number
	 */
	public function getSingleGiftCard(string $number): Response
	{
		return $this->connector->send(new GetSingleGiftCard($number));
	}


	/**
	 * @param string $number
	 */
	public function voidGiftCard(string $number): Response
	{
		return $this->connector->send(new VoidGiftCard($number));
	}


	/**
	 * @param string $number
	 * @param mixed $amount
	 * @param mixed $clientId
	 * @param mixed $type
	 * @param mixed $userId
	 * @param mixed $expiresAt
	 * @param mixed $timeZone
	 */
	public function createGiftCardTransaction(
		string $number,
		mixed $amount,
		mixed $clientId,
		mixed $type,
		mixed $userId,
		mixed $expiresAt,
		mixed $timeZone,
	): Response
	{
		return $this->connector->send(new CreateGiftCardTransaction($number, $amount, $clientId, $type, $userId, $expiresAt, $timeZone));
	}


	/**
	 * @param string $transactionId
	 */
	public function findGiftCardByTransactionId(string $transactionId): Response
	{
		return $this->connector->send(new FindGiftCardByTransactionId($transactionId));
	}


	/**
	 * @param string $transactionId
	 */
	public function reverseGiftCardTransaction(string $transactionId): Response
	{
		return $this->connector->send(new ReverseGiftCardTransaction($transactionId));
	}
}
