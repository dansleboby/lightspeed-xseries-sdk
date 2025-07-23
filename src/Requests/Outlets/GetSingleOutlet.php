<?php

namespace LightSpeed\XSeries\Requests\Outlets;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get single outlet
 */
class GetSingleOutlet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/api/2.0/outlets/{$this->outletId}";
	}


	/**
	 * @param string $outletId
	 */
	public function __construct(
		protected string $outletId,
	) {
	}
}
