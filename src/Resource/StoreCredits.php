<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\StoreCredits\CreateStoreCreditTransaction;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditBulkList;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditList;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditListForTheGivenCustomerId;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditReport;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class StoreCredits extends BaseResource
{
	/**
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $includes (string) Include supplementary data. The only valid value for includes[] is 'customer'.
	 * @param string $accept
	 */
	public function storeCreditList(?string $pageSize = null, ?string $includes = null, ?string $accept = null): Response
	{
		return $this->connector->send(new StoreCreditList($pageSize, $includes, $accept));
	}


	/**
	 * @param string $customerId
	 * @param string $includes (string) Include supplementary data. The only valid value for includes[] is 'customer'.
	 * @param string $accept
	 */
	public function storeCreditListForTheGivenCustomerId(
		string $customerId,
		?string $includes = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new StoreCreditListForTheGivenCustomerId($customerId, $includes, $accept));
	}


	/**
	 * @param array $values
	 * @param string $contentType
	 * @param string $accept
	 */
	public function storeCreditBulkList(
		?array $values = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new StoreCreditBulkList($values, $contentType, $accept));
	}


	/**
	 * @param string $customerId
	 * @param mixed $amount
	 * @param mixed $clientId
	 * @param mixed $storeCreditCustomerId
	 * @param mixed $type
	 * @param mixed $notes
	 * @param mixed $userId
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createStoreCreditTransaction(
		string $customerId,
		mixed $amount = null,
		mixed $clientId = null,
		mixed $storeCreditCustomerId = null,
		mixed $type = null,
		mixed $notes = null,
		mixed $userId = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreateStoreCreditTransaction($customerId, $amount, $clientId, $storeCreditCustomerId, $type, $notes, $userId, $contentType, $accept));
	}


	/**
	 * @param string $accept
	 */
	public function storeCreditReport(?string $accept = null): Response
	{
		return $this->connector->send(new StoreCreditReport($accept));
	}
}
