<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PaymentTypes\ListPaymentTypes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PaymentTypes extends BaseResource
{
	/**
	 * @param string $after (int64) The lower limit for the version numbers to be included in the response.
	 * @param string $before (int64) The upper limit for the version numbers to be included in the response.
	 * @param string $pageSize (integer) The maximum number of items to be returned in the response.
	 * @param string $accept
	 */
	public function listPaymentTypes(
		?string $after = null,
		?string $before = null,
		?string $pageSize = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new ListPaymentTypes($after, $before, $pageSize, $accept));
	}
}
