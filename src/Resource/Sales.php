<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Sales\GetSaleById;
use LightSpeed\XSeries\Requests\Sales\InitReturnSale;
use LightSpeed\XSeries\Requests\Sales\ListSales;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Sales extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listSales(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListSales($after, $before, $pageSize));
	}


	/**
	 * @param string $saleId A completed sale ID - a valid sale with status of `CLOSED`, `ONACCOUNT_CLOSED` or `LAYBY_CLOSED`
	 */
	public function getSaleById(string $saleId): Response
	{
		return $this->connector->send(new GetSaleById($saleId));
	}


	/**
	 * @param string $saleId A completed sale ID - a valid sale with status of `CLOSED`, `ONACCOUNT_CLOSED` or `LAYBY_CLOSED`.
	 */
	public function initReturnSale(string $saleId): Response
	{
		return $this->connector->send(new InitReturnSale($saleId));
	}
}
