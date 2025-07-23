<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Registers\CloseSingleRegister;
use LightSpeed\XSeries\Requests\Registers\GetAllThePaymentsDataAssociatedWithSingleRegister;
use LightSpeed\XSeries\Requests\Registers\GetSingleRegister;
use LightSpeed\XSeries\Requests\Registers\ListRegisters;
use LightSpeed\XSeries\Requests\Registers\OpenSingleRegister;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Registers extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 * @param string $accept
	 */
	public function listRegisters(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $deleted = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListRegisters($after, $before, $pageSize, $deleted, $accept));
	}


	/**
	 * @param string $registerId
	 * @param string $accept
	 */
	public function getSingleRegister(string $registerId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSingleRegister($registerId, $accept));
	}


	/**
	 * @param string $registerId
	 * @param mixed $registerOpenTime
	 * @param string $accept
	 */
	public function openSingleRegister(
		string $registerId,
		mixed $registerOpenTime = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new OpenSingleRegister($registerId, $registerOpenTime, $accept));
	}


	/**
	 * @param string $registerId
	 * @param mixed $payments
	 * @param string $accept
	 */
	public function closeSingleRegister(string $registerId, mixed $payments = null, ?string $accept = null): Response
	{
		return $this->connector->send(new CloseSingleRegister($registerId, $payments, $accept));
	}


	/**
	 * @param string $registerId
	 * @param string $accept
	 */
	public function getAllThePaymentsDataAssociatedWithSingleRegister(
		string $registerId,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new GetAllThePaymentsDataAssociatedWithSingleRegister($registerId, $accept));
	}
}
