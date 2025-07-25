<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\Registers\CloseRegister;
use LightSpeed\XSeries\Requests\Registers\GetRegisterById;
use LightSpeed\XSeries\Requests\Registers\ListRegisters;
use LightSpeed\XSeries\Requests\Registers\OpenRegister;
use LightSpeed\XSeries\Requests\Registers\RegisterPaymentsSummary;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Registers extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param bool $deleted Indicates whether deleted items should be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listRegisters(
		?int $after = null,
		?int $before = null,
		?bool $deleted = null,
		?int $pageSize = null,
	): Response
	{
		return $this->connector->send(new ListRegisters($after, $before, $deleted, $pageSize));
	}


	/**
	 * @param string $registerId The register id
	 */
	public function getRegisterById(string $registerId): Response
	{
		return $this->connector->send(new GetRegisterById($registerId));
	}


	/**
	 * @param string $registerId The register id
	 */
	public function openRegister(string $registerId): Response
	{
		return $this->connector->send(new OpenRegister($registerId));
	}


	/**
	 * @param string $registerId The register id
	 */
	public function closeRegister(string $registerId): Response
	{
		return $this->connector->send(new CloseRegister($registerId));
	}


	/**
	 * @param string $registerId The register id
	 */
	public function registerPaymentsSummary(string $registerId): Response
	{
		return $this->connector->send(new RegisterPaymentsSummary($registerId));
	}
}
