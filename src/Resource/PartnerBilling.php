<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PartnerBilling\CreatePartnerSubscriptionToken;
use LightSpeed\XSeries\Requests\PartnerBilling\CreatePartnerUpdateSubscriptionToken;
use LightSpeed\XSeries\Requests\PartnerBilling\GetPartnerSubscription;
use LightSpeed\XSeries\Requests\PartnerBilling\GetSubscriptionByToken;
use LightSpeed\XSeries\Requests\PartnerBilling\ListPartnerSubscriptions;
use LightSpeed\XSeries\Resource;
use Saloon\Contracts\Response;

class PartnerBilling extends Resource
{
	public function listPartnerSubscriptions(): Response
	{
		return $this->connector->send(new ListPartnerSubscriptions());
	}


	/**
	 * @param string $subscriptionId
	 */
	public function getPartnerSubscription(string $subscriptionId): Response
	{
		return $this->connector->send(new GetPartnerSubscription($subscriptionId));
	}


	/**
	 * @param mixed $priceHandle
	 * @param mixed $productHandle
	 * @param mixed $returnUrl
	 * @param mixed $components
	 * @param mixed $couponCode
	 */
	public function createPartnerSubscriptionToken(
		mixed $priceHandle,
		mixed $productHandle,
		mixed $returnUrl,
		mixed $components,
		mixed $couponCode,
	): Response
	{
		return $this->connector->send(new CreatePartnerSubscriptionToken($priceHandle, $productHandle, $returnUrl, $components, $couponCode));
	}


	/**
	 * @param string $partnerSubscriptionToken
	 */
	public function getSubscriptionByToken(string $partnerSubscriptionToken): Response
	{
		return $this->connector->send(new GetSubscriptionByToken($partnerSubscriptionToken));
	}


	/**
	 * @param mixed $returnUrl
	 * @param mixed $components
	 * @param mixed $priceHandle
	 * @param mixed $productHandle
	 */
	public function createPartnerUpdateSubscriptionToken(
		mixed $returnUrl,
		mixed $components,
		mixed $priceHandle,
		mixed $productHandle,
	): Response
	{
		return $this->connector->send(new CreatePartnerUpdateSubscriptionToken($returnUrl, $components, $priceHandle, $productHandle));
	}
}
