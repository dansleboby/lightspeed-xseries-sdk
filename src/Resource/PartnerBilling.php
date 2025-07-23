<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PartnerBilling\CreatePartnerSubscriptionToken;
use LightSpeed\XSeries\Requests\PartnerBilling\CreatePartnerUpdateSubscriptionToken;
use LightSpeed\XSeries\Requests\PartnerBilling\GetPartnerSubscription;
use LightSpeed\XSeries\Requests\PartnerBilling\GetSubscriptionByToken;
use LightSpeed\XSeries\Requests\PartnerBilling\ListPartnerSubscriptions;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PartnerBilling extends BaseResource
{
	/**
	 * @param string $accept
	 */
	public function listPartnerSubscriptions(?string $accept = null): Response
	{
		return $this->connector->send(new ListPartnerSubscriptions($accept));
	}


	/**
	 * @param string $subscriptionId
	 * @param string $accept
	 */
	public function getPartnerSubscription(string $subscriptionId, ?string $accept = null): Response
	{
		return $this->connector->send(new GetPartnerSubscription($subscriptionId, $accept));
	}


	/**
	 * @param mixed $priceHandle
	 * @param mixed $productHandle
	 * @param mixed $returnUrl
	 * @param mixed $components
	 * @param mixed $couponCode
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createPartnerSubscriptionToken(
		mixed $priceHandle = null,
		mixed $productHandle = null,
		mixed $returnUrl = null,
		mixed $components = null,
		mixed $couponCode = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreatePartnerSubscriptionToken($priceHandle, $productHandle, $returnUrl, $components, $couponCode, $contentType, $accept));
	}


	/**
	 * @param string $partnerSubscriptionToken
	 * @param string $accept
	 */
	public function getSubscriptionByToken(string $partnerSubscriptionToken, ?string $accept = null): Response
	{
		return $this->connector->send(new GetSubscriptionByToken($partnerSubscriptionToken, $accept));
	}


	/**
	 * @param mixed $returnUrl
	 * @param mixed $components
	 * @param mixed $priceHandle
	 * @param mixed $productHandle
	 * @param string $contentType
	 * @param string $accept
	 */
	public function createPartnerUpdateSubscriptionToken(
		mixed $returnUrl = null,
		mixed $components = null,
		mixed $priceHandle = null,
		mixed $productHandle = null,
		?string $contentType = null,
		?string $accept = null,
	): Response
	{
		return $this->connector->send(new CreatePartnerUpdateSubscriptionToken($returnUrl, $components, $priceHandle, $productHandle, $contentType, $accept));
	}
}
