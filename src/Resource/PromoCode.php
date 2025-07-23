<?php

namespace LightSpeed\XSeries\Resource;

use LightSpeed\XSeries\Requests\PromoCode\DeletePromoCodesBulk;
use LightSpeed\XSeries\Requests\PromoCode\GetActivePromoCodesBulk;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PromoCode extends BaseResource
{
	public function getActivePromoCodesBulk(): Response
	{
		return $this->connector->send(new GetActivePromoCodesBulk());
	}


	public function deletePromoCodesBulk(): Response
	{
		return $this->connector->send(new DeletePromoCodesBulk());
	}
}
