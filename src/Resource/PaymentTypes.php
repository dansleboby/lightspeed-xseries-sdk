<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PaymentTypes\ListPaymentTypes;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PaymentTypes extends BaseResource
{
	/**
	 * @param int $after The lower limit for the version numbers to be included in the response.
	 * @param int $before The upper limit for the version numbers to be included in the response.
	 * @param int $pageSize The maximum number of items to be returned in the response.
	 */
	public function listPaymentTypes(?int $after = null, ?int $before = null, ?int $pageSize = null): Response
	{
		return $this->connector->send(new ListPaymentTypes($after, $before, $pageSize));
	}
}
