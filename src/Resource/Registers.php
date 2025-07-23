<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Registers\CloseSingleRegister;
use LightSpeed\XSeries\Requests\Registers\GetAllThePaymentsDataAssociatedWithSingleRegister;
use LightSpeed\XSeries\Requests\Registers\GetSingleRegister;
use LightSpeed\XSeries\Requests\Registers\ListRegisters;
use LightSpeed\XSeries\Requests\Registers\OpenSingleRegister;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class Registers extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $deleted (bool) Whether to include deleted resources.
	 */
	public function listRegisters(?string $before, ?string $pageSize, ?string $deleted): Response
	{
		return $this->connector->send(new ListRegisters($before, $pageSize, $deleted));
	}


	/**
	 * @param string $registerId
	 */
	public function getSingleRegister(string $registerId): Response
	{
		return $this->connector->send(new GetSingleRegister($registerId));
	}


	/**
	 * @param string $registerId
	 * @param mixed $registerOpenTime
	 */
	public function openSingleRegister(string $registerId, mixed $registerOpenTime): Response
	{
		return $this->connector->send(new OpenSingleRegister($registerId, $registerOpenTime));
	}


	/**
	 * @param string $registerId
	 * @param mixed $payments
	 */
	public function closeSingleRegister(string $registerId, mixed $payments): Response
	{
		return $this->connector->send(new CloseSingleRegister($registerId, $payments));
	}


	/**
	 * @param string $registerId
	 */
	public function getAllThePaymentsDataAssociatedWithSingleRegister(string $registerId): Response
	{
		return $this->connector->send(new GetAllThePaymentsDataAssociatedWithSingleRegister($registerId));
	}
}
