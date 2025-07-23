<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\StoreCredits\CreateStoreCreditTransaction;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditBulkList;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditList;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditListForTheGivenCustomerId;
use LightSpeed\XSeries\Requests\StoreCredits\StoreCreditReport;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class StoreCredits extends Resource
{
	/**
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $includes (string) Include supplementary data. The only valid value for includes[] is 'customer'.
	 */
	public function storeCreditList(?string $pageSize, ?string $includes): Response
	{
		return $this->connector->send(new StoreCreditList($pageSize, $includes));
	}


	/**
	 * @param string $customerId
	 * @param string $includes (string) Include supplementary data. The only valid value for includes[] is 'customer'.
	 */
	public function storeCreditListForTheGivenCustomerId(string $customerId, ?string $includes): Response
	{
		return $this->connector->send(new StoreCreditListForTheGivenCustomerId($customerId, $includes));
	}


	/**
	 * @param array $values
	 */
	public function storeCreditBulkList(?array $values): Response
	{
		return $this->connector->send(new StoreCreditBulkList($values));
	}


	/**
	 * @param string $customerId
	 * @param mixed $amount
	 * @param mixed $clientId
	 * @param mixed $storeCreditCustomerId
	 * @param mixed $type
	 * @param mixed $notes
	 * @param mixed $userId
	 */
	public function createStoreCreditTransaction(
		string $customerId,
		mixed $amount,
		mixed $clientId,
		mixed $storeCreditCustomerId,
		mixed $type,
		mixed $notes,
		mixed $userId,
	): Response
	{
		return $this->connector->send(new CreateStoreCreditTransaction($customerId, $amount, $clientId, $storeCreditCustomerId, $type, $notes, $userId));
	}


	public function storeCreditReport(): Response
	{
		return $this->connector->send(new StoreCreditReport());
	}
}
