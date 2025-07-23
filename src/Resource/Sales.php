<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Sales\CreateOrUpdateRegisterSale;
use LightSpeed\XSeries\Requests\Sales\GetSingleSale;
use LightSpeed\XSeries\Requests\Sales\ListSales;
use LightSpeed\XSeries\Requests\Sales\ReturnSale;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Sales extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listSales(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListSales($after, $before, $pageSize, $accept));
	}


	/**
	 * @param string $saleId
	 * @param string $accept
	 */
	public function getSingleSale(string $saleId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleSale($saleId, $accept));
	}


	/**
	 * @param string $saleId
	 * @param string $accept
	 */
	public function returnSale(string $saleId, ?string $accept = null): Response
	{
		return $this->connector->send(new ReturnSale($saleId, $accept));
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
	 * @param string $accept
	 * @param string $contentType
	 */
	public function createOrUpdateRegisterSale(
		mixed $registerSaleProducts = null,
		mixed $registerSalePayments = null,
		mixed $registerId = null,
		mixed $customerId = null,
		mixed $userId = null,
		mixed $source = null,
		mixed $sourceId = null,
		mixed $saleDate = null,
		mixed $note = null,
		mixed $status = null,
		mixed $shortCode = null,
		mixed $invoiceNumber = null,
		mixed $accountsTransactionId = null,
		?string $accept = null,
		?string $contentType = null,
	): Response
	{
		return $this->connector->send(new CreateOrUpdateRegisterSale($registerSaleProducts, $registerSalePayments, $registerId, $customerId, $userId, $source, $sourceId, $saleDate, $note, $status, $shortCode, $invoiceNumber, $accountsTransactionId, $accept, $contentType));
	}
}
