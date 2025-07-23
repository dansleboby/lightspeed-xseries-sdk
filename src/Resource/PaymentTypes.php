<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PaymentTypes\ListPaymentTypes;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class PaymentTypes extends Resource
{
	/**
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 */
	public function listPaymentTypes(?string $before, ?string $pageSize): Response
	{
		return $this->connector->send(new ListPaymentTypes($before, $pageSize));
	}
}
