<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Sales\CreateOrUpdateRegisterSale;
use LightSpeed\XSeries\Requests\Sales\GetSingleSale;
use LightSpeed\XSeries\Requests\Sales\ListSales;
use LightSpeed\XSeries\Requests\Sales\ReturnSale;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Sales extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listSales(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListSales($before, $pageSize));
	}


	/**
	 * @param string $saleId
	 */
	public function getSingleSale(string $saleId): Response
	{
		return $this->connector->send(new GetSingleSale($saleId));
	}


	/**
	 * @param string $saleId
	 */
	public function returnSale(string $saleId): Response
	{
		return $this->connector->send(new ReturnSale($saleId));
	}


	/**
	 * @param mixed $registerSaleProducts
	 * @param mixed $registerSalePayments
	 * @param mixed $registerId
	 * @param mixed $customerId
	 * @param mixed $userId
	 * @param mixed $source
	 * @param mixed $sourceId
	 * @param mixed $saleDate
	 * @param mixed $note
	 * @param mixed $status
	 * @param mixed $shortCode
	 * @param mixed $invoiceNumber
	 * @param mixed $accountsTransactionId
	 */
	public function createOrUpdateRegisterSale(
		mixed $registerSaleProducts,
		mixed $registerSalePayments,
		mixed $registerId,
		mixed $customerId,
		mixed $userId,
		mixed $source,
		mixed $sourceId,
		mixed $saleDate,
		mixed $note,
		mixed $status,
		mixed $shortCode,
		mixed $invoiceNumber,
		mixed $accountsTransactionId,
	): Response
	{
		return $this->connector->send(new CreateOrUpdateRegisterSale($registerSaleProducts, $registerSalePayments, $registerId, $customerId, $userId, $source, $sourceId, $saleDate, $note, $status, $shortCode, $invoiceNumber, $accountsTransactionId));
	}
}
